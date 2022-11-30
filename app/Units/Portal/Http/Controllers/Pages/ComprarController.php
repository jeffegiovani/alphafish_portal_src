<?php

namespace PortalApp\Http\Controllers\Pages;

use PortalApp\Http\Controllers\BaseController;

class ComprarController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->seo()->setTitle('Como comprar tilápia direto da fonte');
        $this->seo()->setDescription('Description da página');

        return $this->view('pages.comprar.index');
    }
}
