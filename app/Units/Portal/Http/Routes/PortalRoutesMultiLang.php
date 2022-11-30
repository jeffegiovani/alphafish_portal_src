<?php

namespace PortalApp\Http\Routes;

use CoreApp\Http\Routes\RoutesFile;

use PortalApp\Http\Controllers\Pages\{
    HomeController,
    ProductController,
    SupportController,
    ComprarController,
    InstitucionalController,
};

class PortalRoutesMultiLang extends RoutesFile
{

    /**
     * @var array
     */
    protected $all_locales;

    /**
     * @return mixed|void
     *
     * Referencia: https://stackoverflow.com/questions/25082154/how-to-create-multilingual-translated-routes-in-laravel
     */
    protected function routes()
    {
        $this->all_locales = config('app.all_locales');

        $this->mapSiteRoutes();

    }


    /**
     * Rotas genéricas do site
     */
    protected function mapSiteRoutes()
    {

        /**
         * Index Redirect
         */
        $this->router
            ->get('/', 'IndexRedirectController@index')
            ->name('home');

        /**
         * Iterate over each language prefix
         */
        foreach ($this->all_locales as $locale_prefix) {

            /**
             * Register new route group with current prefix
             */
            $this->router->group([
                'prefix' => $locale_prefix,
                //'namespace' => 'Pages',
                'middleware' => [
                    //'portal-page-cache'
                ]
            ], function () use ($locale_prefix) {

                /**
                 * Home page
                 */
                $this->router
                    ->get('/', [HomeController::class, 'index'])
                    ->name($locale_prefix . '_home');


                /**
                 * Products
                 */
                $this->router
                    ->get('nitrometano', [ProductController::class, 'nitrometano'])
                    ->name($locale_prefix . '_nitrometano');

                $this->router
                    ->get('metanol', [ProductController::class, 'metanol'])
                    ->name($locale_prefix . '_metanol');

                $this->router
                    ->get('m5', [ProductController::class, 'm5'])
                    ->name($locale_prefix . '_m5');

                $this->router
                    ->get(trans('portal::routes.list_products', [], $locale_prefix), [ProductController::class, 'list'])
                    ->name($locale_prefix . '_list');

                $this->router
                    ->get(trans('portal::routes.support', [], $locale_prefix), [SupportController::class, 'index'])
                    ->name($locale_prefix . '_support');

                
                $this->router
                    ->get('/comprar-tilapia', [ComprarController::class, 'index'])
                    ->name($locale_prefix . '_comprar');

                    
                $this->router
                    ->get('/empresa-de-tilapia', [InstitucionalController::class, 'index'])
                    ->name($locale_prefix . '_instituccional');

            });
        }
    }

}
