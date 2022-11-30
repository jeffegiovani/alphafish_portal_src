<?php

namespace ArtisanApp\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class UpController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $command = Artisan::call('up');

        return response()->json(['up' => $command]);
    }
}
