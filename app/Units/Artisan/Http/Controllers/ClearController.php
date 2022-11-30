<?php

namespace ArtisanApp\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ClearController extends BaseController
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $command['cache:clear'] = Artisan::call('cache:clear');
        $command['route:clear'] = Artisan::call('route:clear');
        $command['view:clear'] = Artisan::call('view:clear');
        $command['config:clear'] = Artisan::call('config:clear');
        $command['clear-compiled'] = Artisan::call('clear-compiled');
        $command['optimize:clear'] = Artisan::call('optimize:clear');
        $command['jeffe-page-cache:clear'] = Artisan::call('jeffe-page-cache:clear');

        return response()->json($command);
    }
}
