<?php

namespace App;

use App\Contato;
use App\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dependente extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nome', 'cpf', 'data_nasc', 'sexo'
    ];

    public function contatos()
    {
        return $this->morphMany(Contato::class, 'dono');
    }

    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);
    }
}
