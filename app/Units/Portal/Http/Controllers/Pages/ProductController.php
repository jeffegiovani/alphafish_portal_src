<?php

namespace PortalApp\Http\Controllers\Pages;

use PortalApp\Http\Controllers\BaseController;

class ProductController extends BaseController
{
    public function list()
    {
        $this->seo()->setTitle('Titulo da página');
        $this->seo()->setDescription('Description da página');

        return $this->view('pages.product.list');
    }
}
