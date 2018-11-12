<?php

namespace Waygou\SurveyorNova\Fields;

use Laravel\Nova\Fields\Boolean;

class PolicyFields
{
    /**
     * Get the pivot fields for the relationship.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            Boolean::make('View Any', 'can_view_any'),
            Boolean::make('View', 'can_view'),
            Boolean::make('Create', 'can_create'),
            Boolean::make('Update', 'can_update'),
            Boolean::make('Delete', 'can_delete'),
            Boolean::make('Force delete', 'can_force_delete'),
            Boolean::make('Restore', 'can_restore'),
            /*
            Boolean::make('View Any', 'can_view_any')->displayUsing(function () {
                return isset($this->pivot) ? $this->pivot->can_view_any : '-';
            }),
            Boolean::make('View', 'can_view')->displayUsing(function () {
                return isset($this->pivot) ? $this->pivot->can_view : '-';
            }),
            Boolean::make('Create', 'can_create')->displayUsing(function () {
                return isset($this->pivot) ? $this->pivot->can_create : '-';
            }),
            Boolean::make('Update', 'can_update')->displayUsing(function () {
                return isset($this->pivot) ? $this->pivot->can_update : '-';
            }),
            Boolean::make('Delete', 'can_delete')->displayUsing(function () {
                return isset($this->pivot) ? $this->pivot->can_delete : '-';
            }),
            Boolean::make('Force delete', 'can_force_delete')->displayUsing(function () {
                return isset($this->pivot) ? $this->pivot->can_force_delete : '-';
            }),
            Boolean::make('Restore', 'can_restore')->displayUsing(function () {
                return isset($this->pivot) ? $this->pivot->can_restore : '-';
            }),
            */
        ];
    }
}
