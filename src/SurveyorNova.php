<?php

namespace Waygou\SurveyorNova;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Waygou\SurveyorNova\Resources\Policy;
use Waygou\SurveyorNova\Resources\Profile;
use Waygou\SurveyorNova\Resources\Scope;

class SurveyorNova extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            Profile::class,
            Scope::class,
            Policy::class,
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('surveyor-nova::navigation');
    }
}
