<?php

namespace PortalApp\Http\Controllers\Pages;

use PortalApp\Http\Controllers\BaseController;

class LandingsController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fuel()
    {
        $this->seo()->setTitle('Titulo da página');
        $this->seo()->setDescription('Description da página');

        return $this->view('pages.landings.fuel');
    }
}
