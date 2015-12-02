<?php namespace Inventario\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class SoloAdmin {

	/**
	* The Guard implementation.
	*
	* @var Guard
	*/

	protected $auth;

	/**
	* Create a new filter instance.
	*
	* @param  Guard  $auth
	* @return void
	*/
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/*
	* Handle an incoming request.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \Closure  $next
	* @return mixed
	*/
	public function handle($request, Closure $next)
	{
		if ($this->auth->user()->rol != 'admin')
		{
			\Session::flash('error', 'Intento entrar a una opción disponible solo para administradores del sistema' );
			return \Redirect::back();
		}
		return $next($request);
	}

}
