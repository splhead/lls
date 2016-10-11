<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
	use SoftDeletes;

    protected $fillable = [
    	'logradouro',
    	'bairro',
    	'numero',
    	'complemento',
    	'referencia',
    	'taxa_entrega'
	];

    protected $dates = ['deleted_at'];

    public function dono()
    {
    	return $this->morphTo();
    }
}
