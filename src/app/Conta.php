<?php

namespace App;

use App\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conta extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = [
    	'agencia',
    	'conta',
    	'limite',
    	'saldo',
    ];

    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);
    }
}
