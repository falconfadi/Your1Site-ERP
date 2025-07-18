<?php

namespace App\Http\Controllers\Ledger;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Ledger\LedgerRepository;
use Illuminate\Http\Request;

class LedgerController extends Controller
{
    private $repo;

    public function __construct()
    {
        $this->repo = new LedgerRepository();
    }

    public function all(Request $request, $cashier_id)
    {
        try{
            return view('main.ledger.all',$this->repo->getCashierLedgersPayload($cashier_id) );
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function today(Request $request, $cashier_id)
    {
        try{
            return view('main.ledger.today', $this->repo->getTodayPayload($cashier_id));
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function records(Request $request, $ledger_id)
    {
        try{
            return view('main.ledger.records', $this->repo->getLedgerRecordsPayload($ledger_id));
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'ledger_id'=>['required','exists:ledgers,id'],
            'records' => ['required', 'array', 'min:1'],
            'records.*.record_type' => ['required', 'string', 'in:debit,credit'],
            'records.*.account_id' => ['required', 'string'],
            'records.*.currency_id' => ['required', 'exists:currencies,id'],
            'records.*.quantity' => ['required', 'numeric', 'min:1'],
            'records.*.note' => ['nullable', 'string', 'max:250'],
        ]);
        $records = $request->records;

        try {
            $ledger = $this->repo->getLedger($request->input('ledger_id'));
            $records = $this->repo->checkForDuplicates($records);
            $records = $this->repo->checkAccounts($records);
            $this->repo->storeLedgerRecords($ledger,$records);
            return redirect()->back()->with('success', 'records stored');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
