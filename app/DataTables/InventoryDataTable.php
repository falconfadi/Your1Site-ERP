<?php

namespace App\DataTables;

use App\Models\Inventory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InventoryDataTable extends DataTable
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
            ->addColumn('action', function ($inventory) {
                return view('utils.datatable_options',[
                    'route'=>route('inventory.show',$inventory->id),
                    'options'=>[]
                    ]
                );
            })
            ->addColumn('status', function ($inventory) {
                return $inventory->status();
            })
            ->addColumn('materials', function ($inventory) {
                return !is_null($inventory->materials) ? $inventory->materials()->count() : 0;
            })
            ->addColumn('default', function ($inventory) {
                return $inventory->is_default ? __('locale.Default') : '-';
            })
            ->addColumn('created_at', function ($inventory) {
                return $inventory->created_at->diffForHumans();
            })
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Inventory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Inventory $model)
    {
        return $model->newQuery()->with('materials');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('inventory-table')
            ->addTableClass('table-sm')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
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
            Column::make('status')->title(__('locale.Status')),
            Column::make('materials')->title(__('locale.Materials')),
            Column::make('default')->title(__('locale.Default')),
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
        return 'Inventory_' . date('YmdHis');
    }
}
