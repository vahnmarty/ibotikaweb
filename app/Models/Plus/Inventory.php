<?php

namespace App\Models\Plus;

use Illuminate\Database\Eloquent\Model;
use DB;

class Inventory extends Model
{
    protected $connection = 'plus';

    public function scopeSearch($query, $keyword){
    	return $query->where('product', 'LIKE', '%' . $keyword . '%');
    }

    public function branch(){
    	return $this->belongsTo('App\Models\Plus\Branch');
    }

    public function setFirstNameAttribute($value)
       {
           $this->attributes['product'];
       }

    public function getFirstNameAttribute()
    {
        return $this->attributes['product'];
    }

    public function scopeSearchSortedByDistance($query, $keyword, $lat, $long){

    	$distance = 'ROUND(( 6371 * ACOS( COS( RADIANS(' . $lat. ') ) * COS( RADIANS( latitude ) ) * COS( RADIANS( longitude ) - RADIANS(' . $long. ') ) + SIN( RADIANS(' . $lat. ') ) * SIN( RADIANS( latitude ) ) ) ) , 2 ) AS distance ';

    	return $query->select('inventories.*', 'branches.pharmacy_id', 'pharmacies.name as pharmacy', 'branches.name as branch', DB::raw('CONCAT(branches.address1, ", ", branches.city, ", ", branches.state, ", ", branches.country) as address' ), DB::raw($distance))
    				->join('branches', 'inventories.branch_id', 'branches.id')
    	            ->join('pharmacies', 'branches.pharmacy_id', 'pharmacies.id')                
    	            ->where('product', 'LIKE', '%' . $keyword . '%');
    }
}
