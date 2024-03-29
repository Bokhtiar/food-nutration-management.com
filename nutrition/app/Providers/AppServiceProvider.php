<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('route', function ($expression) {
            return "<?php echo route ($expression); ?>";
        });

        // view()->composer('*', function($view) {
        //     $view->with('FrontendparentCategories', ParentCategory::query()->Active()->get());
        // });
    }
}
