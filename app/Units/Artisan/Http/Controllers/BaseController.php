<?php

namespace ArtisanApp\Http\Controllers;

use CoreApp\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * @var string
     */
    protected $viewNamespace = 'artisan::';

    /**
     * BaseController constructor.
     */
    public function __construct()
    {

    }
}
