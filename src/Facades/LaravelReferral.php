<?php

namespace Twoh4services\LaravelReferral\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Twoh4services\LaravelReferral\LaravelReferral
 */
class LaravelReferral extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Twoh4services\LaravelReferral\LaravelReferral::class;
    }
}
