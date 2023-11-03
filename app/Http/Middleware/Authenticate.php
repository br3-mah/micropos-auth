<?php

namespace App\Http\Middleware;

use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // write something when user logins
        $u = User::where('email', $request->get('email'))->first();
        if($u){
            // dd($request->get('destination'));
            User::where('id', $u->id)->update(['current_destination' => $request->get('destination')]);
        }
        return $request->expectsJson() ? null : route('login');
    }
}
