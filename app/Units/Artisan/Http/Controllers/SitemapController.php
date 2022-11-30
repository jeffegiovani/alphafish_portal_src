<?php

namespace ArtisanApp\Http\Controllers;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $response = SitemapGenerator::create('https://domain.com')
            ->getSitemap()
            // here we add one extra link, but you can add as many as you'd like
            //->add(Url::create('/extra-page')->setPriority(0.5))
            ->writeToFile(public_path('sitemap.xml'));

        return response()->json($response);
    }
}
