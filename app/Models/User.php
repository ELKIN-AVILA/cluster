<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 30 Apr 2018 22:35:03 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $articulos
 * @property \Illuminate\Database\Eloquent\Collection $contro_cambios
 * @property \Illuminate\Database\Eloquent\Collection $documentos
 * @property \Illuminate\Database\Eloquent\Collection $empresas
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'remember_token'
	];

	public function articulos()
	{
		return $this->hasMany(\App\Models\Articulo::class, 'id_user');
	}

	public function contro_cambios()
	{
		return $this->hasMany(\App\Models\ControCambio::class, 'id_user');
	}

	public function documentos()
	{
		return $this->hasMany(\App\Models\Documento::class, 'id_user');
	}

	public function empresas()
	{
		return $this->hasMany(\App\Models\Empresa::class, 'id_user');
	}
}
