<?php

namespace App\DataTables;

use App\Models\Purchase;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class PurchaseDataTable extends DataTable
{
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
            ->addColumn('action', function ($purchase) {
                $lang = __('locale.View');
                return "<a href='/purchase/show/$purchase->id'>$lang</a>";
            })
            ->addColumn('name', function ($purchase) {
                return $purchase->material->name;
            })
            ->addColumn('unit', function ($purchase) {
                return $purchase->unit->name;
            })
            ->addColumn('bill', function ($purchase) {
                return $purchase->bill->serial ?? '';
            })
            ->addColumn('currency', function ($purchase) {
                return $purchase->currency->name;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Purchase $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Purchase $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('purchase-table')
            ->addTableClass('table-sm')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons($this->getBtns());
    }

    public function getBtns()
    {
        $btn_class = 'btn btn-outline-primary btn-sm';
        return [
            Button::make('pdf')->addClass($btn_class),
            Button::make('print')->addClass($btn_class),
            Button::make('excel')->addClass($btn_class),
            Button::make('copy')->addClass($btn_class),
        ];
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
            Column::make('name')->title(__('locale.Name')),
            Column::make('quantity')->title(__('locale.Quantity')),
            Column::make('unit')->title(__('locale.Unit')),
            Column::make('cost')->title(__('locale.Cost')),
            Column::make('currency')->title(__('locale.Currency')),
            Column::make('bill')->title(__('locale.Bill')),
            Column::make('created_at')->title(__('locale.Created at')),
            Column::computed('action')
                ->title(__('locale.Action'))
                ->exportable(false)
                ->printable(false)
                ->width(60)
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
        return 'Purchase_' . date('YmdHis');
    }
}
