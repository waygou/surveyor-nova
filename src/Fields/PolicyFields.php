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
        ];
    }
}
