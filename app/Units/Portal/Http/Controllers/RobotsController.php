<?php

namespace PortalApp\Http\Controllers;

use MadWeb\Robots\Robots;

class RobotsController extends BaseController
{
    /**
     * Generate "public/robots.txt" file
     */
    public function __invoke(Robots $robots)
    {
        $robots->addUserAgent('*');

        if ($robots->shouldIndex()) {
            // If on the live server, serve a nice, welcoming robots.txt.
            $robots->addAllow('/');
            $robots->addDisallow('/orion');
            //$robots->addSitemap('sitemap.xml');
        } else {
            // If you're on any other server, tell everyone to go away.
            $robots->addDisallow('/');
        }

        return response($robots->generate(), 200, ['Content-Type' => 'text/plain']);
    }
}
