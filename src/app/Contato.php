<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'tipo', 'contato', 'dono_id', 'dono_type',
    ];

    public function dono()
    {
    	return $this->morphTo();
    }
}
