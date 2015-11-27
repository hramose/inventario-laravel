<?php namespace Inventario\Http\Controllers\Categories;

use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;

use Inventario\Categorie;
use Inventario\Http\Requests\CreateCategorieRequest;
use Inventario\Http\Requests\EditCategorieRequest;

use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CategoriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories =  Categorie::paginate(10);

		return view('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCategorieRequest $request)
	{
		$categorie = new Categorie($request->all());
		$categorie->save();

		Session::flash('message', 'La categoria "'.$categorie->nombre.'" fue creada');

		return redirect()->route('categorias.index');
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
		$categorie = Categorie::findOrFail($id);

		return view('categories.edit', compact('categorie'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCategorieRequest $request, $id)
	{
		$categorie = Categorie::findOrFail($id);

		$categorie->fill($request->all());
		$categorie->save();

		Session::flash('message', 'La categoria "'.$categorie->nombre.'" fue editada' );

		return redirect()->route('categorias.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$categorie = Categorie::findOrFail($id);
		$categorie->delete();

		Session::flash('message', 'La categoria "'.$categorie->nombre.'" fue eliminada' );

		return \Redirect::back();
	}

}
