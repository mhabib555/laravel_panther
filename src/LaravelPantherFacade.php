<?php

namespace Mhabib555\LaravelPanther;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mhabib555\LaravelPanther\Skeleton\SkeletonClass
 */
class LaravelPantherFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel_panther';
    }
}
