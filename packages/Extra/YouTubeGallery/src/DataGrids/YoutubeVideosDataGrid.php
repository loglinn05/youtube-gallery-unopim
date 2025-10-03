<?php

namespace Extra\YouTubeGallery\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class YoutubeVideosDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('youtube_videos')
            ->select('id', 'name', 'url');

        return $queryBuilder;
    }

    /**
     * Prepare columns for the data grid.
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => 'ID',
            'type'       => 'number',
            'searchable' => false,
            'sortable'   => true,
            'filterable' => true,
        ]);
        $this->addColumn([
            'index'      => 'name',
            'label'      => trans('youtube-gallery::app.youtube-videos-table.name'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);
        $this->addColumn([
            'index'      => 'url',
            'label'      => 'URL',
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);
    }

    public function prepareActions()
    {
        $this->addAction([
            'icon'   => 'icon-delete',
            'title'  => trans('youtube-gallery::app.youtube-videos-table.delete-action-title'),
            'method' => 'DELETE',
            'url'    => function ($row) {
                return route(
                    'admin.youtube-gallery.destroy',
                    $row->id
                );
            },
        ]);
    }
}
