<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Apr 2018 22:35:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Empresa
 * 
 * @property int $id
 * @property string $razsoc
 * @property string $nit
 * @property string $correo
 * @property int $celular
 * @property string $latitud
 * @property string $longitud
 * @property int $id_user
 * 
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Empresa extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'celular' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'razsoc',
		'nit',
		'correo',
		'celular',
		'latitud',
		'longitud',
		'id_user'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id_user');
	}
}
