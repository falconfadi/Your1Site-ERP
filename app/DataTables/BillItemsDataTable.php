<?php

namespace App\DataTables;

use App\Models\BillItem;
use App\Models\Purchase;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class BillItemsDataTable extends DataTable
{
    private $type;
    private $bill_id;
    public function __construct($type , $bill_id)
    {
        $this->type = $type;
        $this->bill_id = $bill_id;
    }
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function($purchase){
                if($purchase->bill->status ==0){
                    return "<a href='/bill/$purchase->bill_id/purchase/$purchase->id/delete'>delete</a>";
                }
            })
            ->addColumn('material',function($purchase){
                return $purchase->material->name;
            })
            ->addColumn('inventory',function($purchase){
                return $purchase->inventory->name;
            })
            ->addColumn('unit',function($purchase){
                return $purchase->unit->name;
            })
            ->addColumn('currency',function($purchase){
                return $purchase->currency->name;
            })
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\BillItem $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $model = $this->getModelType();
        return $model->newQuery()->where('bill_id',$this->bill_id);
    }

    private function getModelType()
    {
        return match($this->type){
            1=>new Purchase(),
            // 2=>new Sale(),
            default=>new Purchase(),
        };
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('billitems-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(                        
                        Button::make('pdf')->addClass('btn btn-outline-primary'),
                        Button::make('print')->addClass('btn btn-outline-primary'),
                        Button::make('excel')->addClass('btn btn-outline-primary'),
                        Button::make('copy')->addClass('btn btn-outline-primary'),
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('inventory')->title(__('locale.Inventory')),
            Column::make('material')->title(__('locale.Material')),
            Column::make('quantity')->title(__('locale.Quantity')),
            Column::make('cost')->title(__('locale.Cost')),
            Column::make('currency')->title(__('locale.Currency')),
            Column::make('account')->title(__('locale.Account')),
            Column::make('vendor')->title(__('locale.Vendor')),
            Column::computed('action')
                  ->title(__('locale.Action'))
                  ->exportable(false)
                  ->printable(false)
                  ->width(20)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'BillItems_' . date('YmdHis');
    }
}