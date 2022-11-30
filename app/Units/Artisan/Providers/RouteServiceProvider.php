<?php

namespace ArtisanApp\Providers;

use ArtisanApp\Http\Routes\ArtisanRoutes;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'ArtisanApp\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapArtisanRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapArtisanRoutes()
    {
        (new ArtisanRoutes([
            'middleware' => 'web',
            'namespace' => $this->namespace,
            'prefix' => 'artisan',
            'as' => 'artisan.',
        ]))->register();
    }
}
