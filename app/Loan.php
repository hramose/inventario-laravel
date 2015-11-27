<?php namespace Inventario;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'loans';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['cantidad', 'descripcion', 'inicio_prestamo', 'fin_prestamo', 'products_id'];

	/**
	* Borrado logico
	*
	*/
	use SoftDeletes;

	protected $dates = ['deleted_at'];

//------------------------------------------------------------------------------
	public function products(){
		return $this->belongsTo('Inventario\Product');
	}
//------------------------------------------------------------------------------
}
