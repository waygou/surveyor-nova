<?php

namespace Waygou\SurveyorNova\Resources;

use App\Nova\Resource;
use Illuminate\Http\Request;
use Waygou\SurveyorNova\Rules\ClassExists;
use Waygou\SurveyorNova\Rules\HasInterfaceScope;
use Waygou\SurveyorNova\Rules\HasTraitAppliesScopes;
use Waygou\SurveyorNova\Rules\IsModel;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Scope extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Waygou\\Surveyor\\Models\\Scope';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = ['name'];

    /**
     * Show in the default resources sidebar?
     *
     * @var bool
     */
    public static $displayInNavigation = false;

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        $fields = [
            ID::make()->sortable()->onlyOnForms(),

            Text::make('Name', 'name'),

            Text::make('Description', 'description'),

            Text::make('Code', 'code')
                ->onlyOnForms(),

            Text::make('Model', 'model')
                ->help('Fully qualified Class name')
                ->onlyOnForms()
                ->rules(
                    'bail',
                    'required',
                    new ClassExists(),
                    new IsModel(),
                    new HasTraitAppliesScopes()
                ),

            Text::make('Scope Class', 'scope')
                ->help('Fully qualified Class name')
                ->onlyOnForms()
                ->rules(
                    'bail',
                    'required',
                    new ClassExists(),
                    new HasInterfaceScope()
                ),

            BelongsToMany::make('Profiles', 'profiles', \Waygou\SurveyorNova\Resources\Profile::class),
        ];

        return $fields;
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
