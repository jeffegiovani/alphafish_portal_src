<?php

namespace PortalApp\Http\Controllers;

use CoreApp\Http\Controllers\Controller;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class BaseController extends Controller
{

    use SEOToolsTrait;

	/**
	 * @var string
	 */
	protected $viewNamespace = 'portal::';

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->seo()->twitter()->setSite('@jeffegiovani');
    }
}
