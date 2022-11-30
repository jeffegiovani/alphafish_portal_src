<?php

namespace ArtisanApp\Http\Routes;

use CoreApp\Http\Routes\RoutesFile;

class ArtisanRoutes extends RoutesFile
{

    /**
     * @return mixed|void
     */
    protected function routes()
    {
        $this->mapArtisanRoutes();
    }

    /**
     * Rotas com os comandos do Artisan
     */
    protected function mapArtisanRoutes()
    {
        $this->router
            ->get('/clear', 'ClearController@index')
            ->name('clear');

        $this->router
            ->get('/down', 'DownController@index')
            ->name('down');

        $this->router
            ->get('/optimize', 'OptimizeController@index')
            ->name('optimize');

        $this->router
            ->get('/scout-import', 'ScoutImportController@index')
            ->name('scout-import');

        $this->router
            ->get('/sitemap', 'SitemapController@index')
            ->name('sitemap');

        $this->router
            ->get('/up', 'UpController@index')
            ->name('up');
    }

}
