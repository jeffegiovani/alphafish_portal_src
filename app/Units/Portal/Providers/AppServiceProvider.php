<?php

namespace PortalApp\Providers;

use Illuminate\Support\ServiceProvider;

// Facades
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

// Faker
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;

use MadWeb\Robots\RobotsFacade as Robots;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);

        /**
         * Registrando o provedor de rotas
         */
        //$this->app->register(RouteServiceProvider::class);

        //
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'portal');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'portal');

        /**
         * Reference: https://github.com/laravel/framework/pull/20599
         */
        $this->loadJSONTranslationsFrom(__DIR__ . '/../resources/lang');


        $this->setUpLocale();

        Robots::setShouldIndexCallback(function () {
            return app()->environment('production');
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->register(RouteServiceProvider::class);
        // $this->app->register(EventServiceProvider::class);


        /*$this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('pt_BR');
        });*/
    }

    /**
     * Set up locale and locale_prefix if other language is selected
     */
    public function setUpLocale()
    {
        $locale_prefix = Request::segment(1) ?? 'pt';

        if (in_array($locale_prefix, config('app.all_locales'))) {
            $this->app->setLocale($locale_prefix);
            config(['app.locale_prefix' => $locale_prefix]);
        } else {
            $locale_prefix = 'pt';
        }

        Cookie::queue('last_locale', $locale_prefix, 60 * 24 * 30); // Setando cookie para 30 dias

        View::share('locale_prefix', $locale_prefix);
    }

}
