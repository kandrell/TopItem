<?php

namespace TopList\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class RouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('topitems', 'TopItem\Controllers\ContentController@showTopItems');
    }
}
