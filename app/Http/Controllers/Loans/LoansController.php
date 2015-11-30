<?php namespace Inventario\Http\Controllers\Loans;

use Inventario\Http\Requests;
use Inventario\Http\Controllers\Controller;

use Inventario\Loan;
use Inventario\Http\Requests\CreateLoanRequest;
use Inventario\Http\Requests\EditLoanRequest;

use Inventario\Product;

use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoansController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$loans = Loan::paginate(10);

		return view('loans.index', compact('loans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$products = Product::lists('nombre', 'id');

		return view('loans.create', compact('products'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateLoanRequest $request)
	{
		$loan = new Loan($request->all());
		$loan->save();

		Session::flash('message', 'El prestamo del producto "'.$loan->products->nombre.'" fue añadido al sistema' );

		return redirect()->route('prestamos.index');
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
		$loan = Loan::findOrFail($id);

		$products = Product::lists('nombre', 'id');

		return view('loans.edit', compact(['products', 'loan']));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditLoanRequest $request, $id)
	{
		$loan = Loan::findOrFail($id);

		$loan->fill($request->all());
		$loan->save();

		Session::flash('message', 'El prestamo del producto "'.$loan->products->nombre.'" fue editado' );

		return redirect()->route('prestamos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$loan = Loan::findOrFail($id);
		$loan->delete();

		Session::flash('message', 'El prestamo del producto "'.$loan->products->nombre.'" fue eliminado' );

		return \Redirect::back();
	}

	//--------------------------------------------------------------------------
	// Funciones especiales
	//--------------------------------------------------------------------------
	/**
	 * Completa un prestamo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 public function giveback($id)
	 {
		 $loan = Loan::findOrFail($id);

		 $products = Product::lists('nombre', 'id');

		 return view('loans.giveback', compact(['products', 'loan']));
	 }


}
