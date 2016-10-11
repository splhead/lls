<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

	protected $dates = ['deleted_at'];

	protected $table = 'itens';

    protected $fillable = [
    	'descricao', 'preco', 'tipo', //'desconto',
    ];

    protected $guarded = [
    	'preco', //'desconto',
    ];
}
