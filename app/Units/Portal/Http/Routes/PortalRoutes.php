<?php

namespace PortalApp\Http\Routes;

use CoreApp\Http\Routes\RoutesFile;

use PortalApp\Http\Controllers\Pages\{
    Home\HomeController,
};

class PortalRoutes extends RoutesFile
{

    /**
     * @return mixed|void
     */
    protected function routes()
    {
        $this->mapPortalRoutes();

    }

    /**
     * Rotas genéricas do site
     */
    protected function mapPortalRoutes()
    {
        $this->router->group([
            'namespace' => 'Pages'
        ], function () {
            /**
             * Portal home page
             */
            $this->router->group([
                'namespace' => 'Home',
                'middleware' => [
                    'portal-page-cache'
                ]
            ], function () {
                $this->router
                    ->get('/', [HomeController::class, 'index'])
                    ->name('home');

                $this->router
                    ->get('/pagina-2', [HomeController::class, 'index2'])
                    ->name('home2');
            });

            /**
             * Institucional
             */
            $this->router->group([
                'namespace' => 'Institucional'
            ], function () {
                $this->router
                    ->get('/sobre', 'InstitucionalController@index')
                    ->name('sobre');
            });

            /**
             * Atendimento
             */
            $this->router->group([
                'namespace' => 'Atendimento'
            ], function () {
                $this->router
                    //->middleware('page-cache')
                    ->get('/fale-conosco', 'FaleConoscoController@index')
                    ->name('fale_conosco');

                $this->router
                    ->get('/trabalhe-conosco', 'TrabalheConoscoController@index')
                    ->name('trabalhe_conosco');
            });
        });
    }
}
