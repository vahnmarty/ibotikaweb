<?php

namespace App\Models\Plus;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $connection = 'plus';

    public function scopeSearch($query, $keyword){
    	return $query->where('name', 'LIKE', '%' . $keyword . '%');
    }
}
