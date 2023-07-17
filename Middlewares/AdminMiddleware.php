<?php
namespace Middlewares;

use Core\Auth;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;


class AdminMiddleware implements IMiddleware
{
  public function handle(Request $request): void 
    {
    
        // Authenticate user, will be available using request()->user
        dd($request);
        $request->user = Auth::ensureSessionStarted();
        dd($request->user);
        // If authentication failed, redirect request to user-login page.
        if($request->user === null) {
            $request->setRewriteUrl(url('/login'));
        }

    }
}