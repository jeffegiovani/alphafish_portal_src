<?php

namespace PortalApp\Http\Routes;

use CoreApp\Http\Routes\RoutesFile;

class RobotsRoutes extends RoutesFile
{

    /**
     * @return mixed|void
     */
	protected function routes()
	{
	    $this->mapRoutes();

	}

    /**
     * Robots.txt
     */
    protected function mapRoutes()
    {
        $this->router
            ->get('robots.txt', 'RobotsController')
            ->name('robots');

    }
}
