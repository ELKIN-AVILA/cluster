<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Apr 2018 22:35:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Documento
 * 
 * @property int $id
 * @property string $titulo
 * @property string $archivo
 * @property string $extension
 * @property int $id_user
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $contro_cambios
 *
 * @package App\Models
 */
class Documento extends Eloquent
{
	protected $table = 'documento';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int'
	];

	protected $fillable = [
		'titulo',
		'archivo',
		'extension',
		'id_user'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id_user');
	}

	public function contro_cambios()
	{
		return $this->hasMany(\App\Models\ControCambio::class, 'id_documento');
	}
}
