<?php

namespace PortalApp\Http\Controllers\Pages;

use PortalApp\Http\Controllers\BaseController;

class InstitucionalController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->seo()->setTitle('A empresa');
        $this->seo()->setDescription('Description da página');

        return $this->view('pages.institucional.index');
    }
}
