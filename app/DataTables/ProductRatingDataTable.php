<?php

namespace App\DataTables;

use App\Models\ProductRating;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductRatingDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query){
                $delete = "<a href='".route('admin.product-reviews.destroy', $query->id)."' class='btn btn-danger delete-item ml-2'><i class='fas fa-trash'></i></a>";

                return $delete;
            })
            ->addColumn('user_name', function($query){
                return $query->user->name;
            })
            ->addColumn('product', function($query){
                return $query->product->name;
            })
            ->addColumn('status', function($query){
                $html ='<select class="form-control review_status" data-id="'.$query->id.'">
                <option '.($query->status === 0 ? 'selected' : '').' value="0">Pending</option>
                <option '.($query->status === 1 ? 'selected' : '').' value="1">Approved</option>
                </select>';

                return $html;
            })
            ->rawColumns(['status', 'action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(ProductRating $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('productrating-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('user_name'),
            Column::make('product'),
            Column::make('rating'),
            Column::make('review'),
            Column::make('status')->width(100),

            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ProductRating_' . date('YmdHis');
    }
}
