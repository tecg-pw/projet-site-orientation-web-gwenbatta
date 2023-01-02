<?php

namespace App\Nova\Filters;

use App\Models\Status;
use App\Models\StatusTranslation;
use App\Models\User;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class UserStatus extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';
    public $name = 'Status';

    /**
     * Apply the filter to the given query.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        $users = User::all();
        $ids = [];
        foreach ($users as $statusRef) {
            if ($statusRef->status_id == $value) {
                $ids [] = $statusRef->id;
            }
        }
        return $query->whereIn('id', $ids);
    }

    /**
     * Get the filter's available options.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $statusRefs = User::select('status_id')->get();
        $status = [];
        foreach ($statusRefs as $statusSingle) {
            $status[$statusSingle->status->translation->first()->name] = $statusSingle->status_id;
        }
        return $status;
    }
}
