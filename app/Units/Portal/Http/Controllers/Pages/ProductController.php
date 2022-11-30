<?php

namespace PortalApp\Http\Controllers\Pages;

use PortalApp\Http\Controllers\BaseController;

class ProductController extends BaseController
{

    public function metanol()
    {
        $this->seo()->setTitle('Metanol');
        $this->seo()->setDescription('Metanol');

        return $this->view('pages.product.metanol');
    }


    public function nitrometano()
    {
        $this->seo()->setTitle('Nitrometano');
        $this->seo()->setDescription('Nitrometano');

        return $this->view('pages.product.nitrometano');
    }


    public function m5()
    {
        $this->seo()->setTitle('M5');
        $this->seo()->setDescription('M5');

        return $this->view('pages.product.m5');
    }


    public function list()
    {
        $this->seo()->setTitle('Titulo da página');
        $this->seo()->setDescription('Description da página');

        return $this->view('pages.product.list');
    }
}
