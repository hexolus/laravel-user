<?php

namespace Hexolus\Laravel\User\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;

interface User extends Authenticatable {
    /**
     * 
     * @return User
     */
    public static function getUser();
}