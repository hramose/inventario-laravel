<?php namespace Inventario\Http\Controllers\Users;

use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;

use Inventario\User;

use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(10);

		return view('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//dd($request->all());

		$user = new User($request->all());
		$user->save();

		Session::flash('message', 'El usuario "'.$user->name.'" fue creado ' );

		return redirect()->route('usuarios.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);

		return view('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$user->fill(Request::all());
		$user->save();

		Session::flash('message', 'El usuario "'.$user->name.'" fue editado' );

		return redirect()->route('usuarios.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$user = User::findOrFail($id);
		$user->delete();

		Session::flash('message', 'El usuario "'.$user->name.'" fue eliminado' );

		return \Redirect::back();
	}

}
