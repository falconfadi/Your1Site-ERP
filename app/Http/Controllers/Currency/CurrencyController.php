<?php

namespace App\Http\Controllers\Currency;

use App\DataTables\CurrencyDataTable;
use App\Http\Controllers\BaseController;
use App\Http\Repositories\Currency\CurrencyRepository;
use Exception;
use Illuminate\Http\Request;

class CurrencyController extends BaseController
{
    private $repo;
    public function __construct()
    {
        $this->repo = new CurrencyRepository();
    }
    public function index()
    {
        $table = new CurrencyDataTable();
        return $table->render('main.currency.index');
    }

    public function show($id)
    {
        return view('main.currency.show', $this->repo->getShowPayload($id));
    }

    public function create()
    {
        return view('main.currency.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:currencies,name'],
            'code' => ['required', 'string'],
            'rate_to_default' => ['required', 'numeric', 'min:0.01', 'max:100000']
        ]);
        $this->repo->add($request->only(['name', 'code', 'rate_to_default']));
        return redirect()->route('currency.all')->with('success', 'Currency Added');
    }

    public function delete($id)
    {
        try {
            $this->repo->delete($id);
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
        return redirect()
            ->route('currency.all')
            ->with('success', 'currency deleted');
    }

    public function setDefault(Request $request, $id)
    {
        foreach ($request->except('_token') as $key => $value) {
            if ($value > 0) {
                $this->repo->find($key)->update(['is_default' => 0, 'rate_to_default' => $value]);
            }
        }
        $this->repo->find($id)->update(['is_default' => 1, 'rate_to_default' => 1]);
        return back()->with('success', 'Default currency updated');
    }

    public function changeRate(Request $request, $id)
    {
        $data = $request->validate(['rate'=>['required','numeric','min:1','max:100000']]);
        $this->repo->find($id)->update(['rate_to_default' => $data['rate'] ]);
        return back()->with('success', 'Change rate updated');
    }
}
