<?php

namespace Alirezaabdolmaleki\RayganSms\Facades;

use Illuminate\Support\Facades\Facade;

class RayganSms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'RayganSms';
    }
}
