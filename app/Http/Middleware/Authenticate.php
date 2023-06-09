<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{

    protected $user_route = 'user.login';
    protected $admin_route = 'admin.login';
    protected $paid_member_route = 'paid_member.login';
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Route::is('admin.*')){
                return route($this->admin_route);
            } elseif(Route::is('paid_member.*')){
                return route($this->paid_member_route);
            } else {
                return route($this->user_route);
            }
        }
    }
}
