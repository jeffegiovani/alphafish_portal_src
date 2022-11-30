<?php

namespace ArtisanApp\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class DownController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $command = Artisan::call('down');

        return response()->json(['down' => $command]);
    }
}
