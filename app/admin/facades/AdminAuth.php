<?php

namespace Admin\Facades;

use Illuminate\Support\Facades\Facade;

class AdminAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @see \Admin\Classes\User
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'admin.auth';
    }
}
