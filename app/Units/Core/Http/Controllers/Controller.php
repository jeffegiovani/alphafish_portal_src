<?php

namespace CoreApp\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    /**
     * @var string Namespace para as views desse "Module Application"
     */
    protected $viewNamespace = '';


    /**
     * Implementa a renderização das views concatenando o Namespace
     *
     * @param null $view
     * @param array $data
     * @param array $mergeData
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function view($view = null, $data = [], $mergeData = [])
    {
        if (!empty($this->viewNamespace) && !Str::contains($view, '::')){
            $view = $this->viewNamespace . $view;
        }

        return view($view, $data, $mergeData);
    }
}
