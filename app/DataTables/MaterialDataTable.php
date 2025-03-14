<?php

namespace App\DataTables;

use App\Models\Material;
use Carbon\Carbon;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MaterialDataTable extends DataTable
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
            ->addColumn('action', function ($material) {
                return view('utils.datatable_options',[
                    'route'=>route('material.show',$material->id),
                    'options'=>[]
                ]);
            })
            ->setRowAttr([
                'id' => function ($material) {
                    return 'row-' . $material->id;
                },
                'class' => function ($material) {
                    if ($material->type == 2 && !$material->hasManufactureModel()) {
                        return 'alert alert-danger';
                    }
                }
            ])
            ->addColumn('quantity', function ($material) {
                return $material->inventories()->sum('quantity');
            })
            ->addColumn('unit', function ($material) {
                return $material->defaultUnit();
            })
            ->addColumn('units', function ($material) {
                return $material->units()->count();
            })
            ->addColumn('type', function ($material) {
                return $material->getType();
            })
            ->addColumn('created_at', function ($material) {
                return $material->created_at->diffForHumans();
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Material $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Material $model)
    {
        return $model->newQuery()->with('units');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->addTableClass('table-sm')
            ->setTableId('materials-table')
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
            Column::make('type')->title(__('locale.Type')),
            Column::make('quantity')->title(__('locale.Quantity')),
            Column::make('unit')->title(__('locale.Main unit')),
            Column::make('units')->title(__('locale.Units')),
            Column::make('created_at')->title(__('locale.Created at')),
            Column::computed('action')
                ->title(__('locale.Action'))
                ->exportable(false)
                ->printable(false)
                ->orderable(false)
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
        return 'Material_' . date('YmdHis');
    }
}
