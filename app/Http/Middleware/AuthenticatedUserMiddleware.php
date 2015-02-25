<?php namespace App\Http\Middleware;

use Closure;

use View;
use Auth;
class AuthenticatedUserMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

	public function __construct()
	{
		View::share('current_user', Auth::User()); 
	}

	


	public function handle($request, Closure $next)
	{
		return $next($request);
	}

}
