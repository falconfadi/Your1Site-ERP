<?php

namespace App\DataTables;

use App\Models\Cashier;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class CashierDataTable extends DataTable
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
            ->addColumn('action', function ($cashier) {
                $view = __('locale.View');
                $options = __('locale.Options');
                return "
                <div class='dropdown'>
                    <button type='button' class='btn btn-sm dropdown-toggle hide-arrow py-0' data-bs-toggle='dropdown'>
                        $options
                    </button>
                    <div class='dropdown-menu dropdown-menu-end'>
                        <a class='dropdown-item' href='/cashier/show/$cashier->id'>
                            <i data-feather='edit-2' class='me-50'></i>
                            <span>$view</span>
                        </a>
                    </div>
                </div>";
            })
            ->addColumn('is_default', function($cashier){
                return $cashier->is_default == 1 ? __('locale.Default') : '-';
            })
            ->addColumn('created_at',function($cashier){
                return $cashier->created_at->diffForHumans();
            })
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Cashier $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Cashier $model)
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
            ->setTableId('cashier-table')
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
            Column::make('name'),
            Column::make('total'),
            Column::make('is_default'),
            Column::make('created_at'),
            Column::computed('action')
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
        return 'Cashier_' . date('YmdHis');
    }
}
