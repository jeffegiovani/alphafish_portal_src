<?php

namespace PortalApp\Http\Controllers\Pages;

use PortalApp\Http\Controllers\BaseController;

class SupportController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->seo()->setTitle('Titulo da página');
        $this->seo()->setDescription('Description da página');

        return $this->view('pages.support.index');
    }
}
