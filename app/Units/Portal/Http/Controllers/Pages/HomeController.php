<?php

namespace PortalApp\Http\Controllers\Pages;

use PortalApp\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->seo()->setTitle('Fazenda de Tilápia');
        $this->seo()->setDescription('Description da página');

        return $this->view('pages.home.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index2()
    {
        $this->seo()->setTitle('Titulo da pagina');
        $this->seo()->setDescription('Description da pagina');

        return $this->view('pages.home.index2');
    }
}
