<?php namespace Inventario\Http\Controllers\Products;

use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;

use Inventario\Product;
use Inventario\Http\Requests\CreateProductRequest;
use Inventario\Http\Requests\EditProductRequest;

use Inventario\Brand;
use Inventario\Categorie;

use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::paginate(10);

		return view('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$brands 	= Brand::lists('nombre', 'id');
		$categories	= Categorie::lists('nombre', 'id');

		return view('products.create', compact(['brands', 'categories']));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProductRequest $request)
	{
		$product = new Product($request->all());
		$product->save();

		Session::flash('message', 'El producto "'.$product->nombre.'" fue añadido al sistema' );

		return redirect()->route('productos.index');
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
		$product = Product::findOrFail($id);

		$brands 	= Brand::lists('nombre', 'id');
		$categories	= Categorie::lists('nombre', 'id');

		return view('products.edit', compact(['product', 'brands', 'categories']));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditProductRequest $request, $id)
	{
		$product = Product::findOrFail($id);

		$product->fill($request->all());
		$product->save();

		Session::flash('message', 'El producto "'.$product->nombre.'" fue editado' );

		return redirect()->route('productos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = Product::findOrFail($id);
		$producto->delete();

		Session::flash('message', 'El producto "'.$producto->nombre.'" fue eliminado' );

		return \Redirect::back();
	}

}
