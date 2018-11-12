<?php

namespace Waygou\SurveyorNova;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Waygou\SurveyorNova\Http\Middleware\Authorize;
use Waygou\SurveyorNova\Observers\PolicyNovaObserver;
use Waygou\SurveyorNova\Observers\ProfileNovaObserver;
use Waygou\SurveyorNova\Observers\ScopeNovaObserver;
use Waygou\Surveyor\Models\Policy;
use Waygou\Surveyor\Models\Profile;
use Waygou\Surveyor\Models\Scope;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-surveyor');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'nova-surveyor');

        $this->app->booted(function () {
            $this->routes();
        });

        Nova::serving(function (ServingNova $event) {
            Profile::observe(ProfileNovaObserver::class);
            Scope::observe(ScopeNovaObserver::class);
            Policy::observe(PolicyNovaObserver::class);
        });

        $this->registerPublishing();
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../config/nova_surveyor.php' => config_path('nova_surveyor.php'),
        ], 'nova-surveyor-config');
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/nova-surveyor')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
