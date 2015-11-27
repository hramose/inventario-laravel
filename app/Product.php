<?php namespace Inventario;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'modelo', 'serie', 'descripcion', 'cantidad', 'tipo', 'categories_id'];

	/**
	* Borrado logico
	*
	*/
	use SoftDeletes;

	protected $dates = ['deleted_at'];

//------------------------------------------------------------------------------
	public function brands(){
		return $this->belongsTo('Inventario\Brand');
	}
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
	public function categories(){
		return $this->belongsTo('Inventario\Brand');
	}
//------------------------------------------------------------------------------

}
