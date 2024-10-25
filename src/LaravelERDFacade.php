<?php

namespace Alvarezallen99\LaravelERD;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alvarezallen99\LaravelERD\LaravelERD
 */
class LaravelERDFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-erd';
    }
}
