<?php

namespace Krorten\Nanopool\Facades;

use Illuminate\Support\Facades\Facade;

class NanopoolFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Nanopool';
    }
}