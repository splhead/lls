<?php

namespace App;

use App\Contato;
use App\Endereco;
use App\Dependente;
use App\Conta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;

    // public $primaryKey = 'cpf';

	// public $incrementing = false;

    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cpf', 'data_nasc', 'sexo'
    ];

    public function contatos()
    {
        return $this->morphMany(Contato::class, 'dono');
    }

    public function enderecos()
    {
        return $this->morphMany(Endereco::class, 'dono');
    }

    public function dependentes()
    {
        return $this->hasMany(Dependente::class);
    }

    public function contas()
    {
        return $this->hasMany(Conta::class);
    }


   /* public function user()
    {
    	return $this->hasOne('App\User');
    }*/
}
