<?php

namespace App\Http\Controllers;

use App\DataTables\ManufacturingDataTable;
use App\Http\Repositories\ManufacturingRepository;
use Exception;
use Illuminate\Http\Request;

class ManufacturingController extends Controller
{
    private $repo;

    public function __construct()
    {
        $this->repo = new ManufacturingRepository;
    }

    public function index()
    {
        return (new ManufacturingDataTable)->render('main.manufacturing.index');
    }

    public function show($id)
    {
        return view('main.manufacturing.show', $this->repo->getShowPayload($id));
    }

    public function create()
    {
        return view('main.manufacturing.create', $this->repo->getCreatePayload());
    }

    public function store(Request $request)
    {
        try {
            $manufuctering = $this->repo->storeManufacturig($request);
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()
            ->route('manufacturing.show', ['manufacturing' => $manufuctering->id])
            ->with('success', 'manufacturing created');
    }
}
