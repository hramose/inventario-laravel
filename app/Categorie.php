<?php namespace Inventario;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'descripcion'];

	/**
	* Borrado logico
	*
	*/
	use SoftDeletes;

	protected $dates = ['deleted_at'];

//------------------------------------------------------------------------------
	public function products()
	{
		return $this->hasMany('Inventario\Categorie', 'categories_id');
	}
//------------------------------------------------------------------------------

}
