<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

use Collective\Html\Eloquent\FormAccessible;

class Feriado extends Model
{
	use FormAccessible;

	public $timestamps = false;
	public $primaryKey = 'data';
	public $incrementing = false;

    protected $fillable = [
        'data', 'descricao',
    ];

    public function getDataAttribute($value)
    {
    	return Carbon::parse($value)->format('Y-m-d');
    }

    public function formDataAttribute($value)
    {
    	return Carbon::parse($value)->format('d/m/Y');
    }
}
