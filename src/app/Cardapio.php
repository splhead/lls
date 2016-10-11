<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'dia', 'item_id'
    ];
}
