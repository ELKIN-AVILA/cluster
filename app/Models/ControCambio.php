<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Apr 2018 22:35:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ControCambio
 * 
 * @property int $id
 * @property \Carbon\Carbon $fecha_hora
 * @property int $id_user
 * @property string $descripcion
 * @property int $id_articulo
 * @property int $id_documento
 * 
 * @property \App\Models\User $user
 * @property \App\Models\Articulo $articulo
 * @property \App\Models\Documento $documento
 *
 * @package App\Models
 */
class ControCambio extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'id_articulo' => 'int',
		'id_documento' => 'int'
	];

	protected $dates = [
		'fecha_hora'
	];

	protected $fillable = [
		'fecha_hora',
		'id_user',
		'descripcion',
		'id_articulo',
		'id_documento'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id_user');
	}

	public function articulo()
	{
		return $this->belongsTo(\App\Models\Articulo::class, 'id_articulo');
	}

	public function documento()
	{
		return $this->belongsTo(\App\Models\Documento::class, 'id_documento');
	}
}
