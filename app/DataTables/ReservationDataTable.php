<?php

namespace App\DataTables;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReservationDataTable extends DataTable
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
                $delete = "<a href='".route('admin.reservation.destroy', $query->id)."' class='btn btn-danger delete-item ml-2'><i class='fas fa-trash'></i></a>";

                return $delete;
            })
            ->addColumn('created_at', function($query){
                return date('d-m-y', strtotime($query->created_at));
            })
            ->addColumn('status', function($query){
                $html ='<select class="form-control reservation_status" data-id="'.$query->id.'">
                <option '.($query->status === 'pending' ? 'selected' : '').' value="pending">Pending</option>
                <option '.($query->status === 'approved' ? 'selected' : '').' value="approved">Approved</option>
                <option '.($query->status === 'complete' ? 'selected' : '').' value="complete">Complete</option>
                <option  '.($query->status === 'cancel' ? 'selected' : '').' value="cancel">Cancel</option>
                </select>';

                return $html;
            })
            ->rawColumns(['status', 'action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Reservation $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('reservation-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0)
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
            Column::make('name'),
            Column::make('phone'),
            Column::make('date'),
            Column::make('time'),
            Column::make('created_at'),
            Column::make('status'),

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
        return 'Reservation_' . date('YmdHis');
    }
}
