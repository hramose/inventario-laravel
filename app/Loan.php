<?php namespace Inventario;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

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
//------------------------------------------------------------------------------
	/**
	* inicio_prestamo
	*/
	public function setInicioPrestamoAttribute($value)
	{
		if (empty($value) || $value == 'Fecha no registrada')
		{
			$this->attributes['inicio_prestamo'] = Carbon::createFromFormat('d/m/Y', '00/00/0000')->toDateString();
		}
		else
		{
			$this->attributes['inicio_prestamo'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
		}
	}
//------------------------------------------------------------------------------
	public function getInicioPrestamoAttribute($value)
	{
		if (Carbon::parse($value)->format('d/m/Y') == '30/11/-0001' || $value == null)
		{
			return 'Fecha no registrada';
		}
		else
		{
			return Carbon::parse($value)->format('d/m/Y');
		}
	}
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
	/**
	* fin_prestamo
	*/
	public function setFinPrestamoAttribute($value)
	{
		if (empty($value) || $value == 'Fecha no registrada')
		{
			$this->attributes['fin_prestamo'] = Carbon::createFromFormat('d/m/Y', '00/00/0000')->toDateString();
		}
		else
		{
			$this->attributes['fin_prestamo'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
		}
	}
//------------------------------------------------------------------------------
	public function getFinPrestamoAttribute($value)
	{
		if (Carbon::parse($value)->format('d/m/Y') == '30/11/-0001' || $value == null)
		{
			return 'Fecha no registrada';
		}
		else
		{
			return Carbon::parse($value)->format('d/m/Y');
		}
	}
//------------------------------------------------------------------------------
//------------------------------------------------------------------------------
	public function scopeComplete($query)
	{
		$query->where('fin_prestamo','!=', '');
	}
//------------------------------------------------------------------------------
	public function scopeIncomplete($query)
	{
		$query->where('fin_prestamo','=', null);
	}
}
