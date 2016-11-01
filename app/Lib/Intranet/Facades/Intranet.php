<?php

namespace App\Lib\Intranet\Facades;

use Illuminate\Support\Facades\Facade;

class Intranet extends Facade{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'intranet'; }
}