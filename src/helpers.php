<?php

use Hexolus\Laravel\User\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;

if (!function_exists('user')) {
    /**
     * return User if logged in
     * 
     * @return User|null 
     * @throws BindingResolutionException 
     */
    function user() 
    {
        return auth()->user();
    }
}