<?php

namespace ArtisanApp\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class OptimizeController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $command['optimize'] = Artisan::call('optimize');
        $command['config:cache'] = Artisan::call('config:cache');
        $command['route:cache'] = Artisan::call('route:cache');
        $command['view:cache'] = Artisan::call('view:cache');

        return response()->json($command);
    }
}
