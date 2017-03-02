<?php

namespace TopList\Providers;


use Plenty\Plugin\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(RouteServiceProvider::class);
    }
}
