<?php

namespace Modules\Menu\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Modules\Menu\Providers\MenuServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            // maybe VainServiceProvider::class is necessary, too?
            MenuServiceProvider::class,
        ];
    }
}