<?php


namespace Mcprohosting\MulticraftApi;

use \Illuminate\Support\Facades\Facade;

class Multicraft extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'multicraftapi'; }

}
