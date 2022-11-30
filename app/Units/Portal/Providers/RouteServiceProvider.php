<?php

namespace PortalApp\Providers;

use PortalApp\Http\Routes\PortalRoutesMultiLang;

// use PortalApp\Http\Routes\PortalRoutesMultiLang;
use PortalApp\Http\Routes\RobotsRoutes;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Vipertecpro\PaginateRoute\PaginateRouteFacade as PaginateRoute;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'PortalApp\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        PaginateRoute::registerMacros();

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapRoutes()
    {
        /**
         * Portal Multi Lang
         */
        (new PortalRoutesMultiLang([
            'middleware' => [
                'web',
                //'portal-page-cache',
                'cache.headers:public;max_age=3600;etag'
            ],
            'namespace' => $this->namespace,
            // 'prefix' => 'slug',
            // 'namespace' => 'Pages',
        ]))->register();

        /**
         * Portal
         */
        /*(new PortalRoutes([
            'middleware' => [
                'web',
                //'portal-page-cache'
            ],
            'namespace' => $this->namespace,
            // 'prefix' => 'slug',
        ]))->register();*/

        /**
         * Robots
         */
        (new RobotsRoutes([
            'middleware' => [
                'web',
            ],
            'namespace' => $this->namespace,
            // 'prefix' => 'slug',
        ]))->register();
    }
}
