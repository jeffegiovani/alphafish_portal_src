<?php

namespace ArtisanApp\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ScoutImportController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $command['scout:import'] = Artisan::call('scout:import', ['model' => '\App\Domains\Articles\Article']);

        return response()->json($command);
    }
}
