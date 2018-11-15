<?php

namespace App\Models\Plus;

use Illuminate\Database\Eloquent\Model;
use DB;

class Branch extends Model
{
    protected $connection = 'plus';

    public function getAddressAttribute()
    {
        return $this->attributes['address1'] . ', ' . $this->attributes['city'] . ', ' . $this->attributes['state'].  ', ' . $this->attributes['country'];
    }
    
    public function scopeSearch($query, $keyword){
    	return $query->where('name', 'LIKE', '%' . $keyword . '%');
    }

    public function pharmacy(){
    	return $this->belongsTo('App\Models\Plus\Pharmacy');
    }

    public function scopeNearby($query, $lat, $long){
        $distance = 'ROUND(( 6371 * ACOS( COS( RADIANS(' . $lat. ') ) * COS( RADIANS( latitude ) ) * COS( RADIANS( longitude ) - RADIANS(' . $long. ') ) + SIN( RADIANS(' . $lat. ') ) * SIN( RADIANS( latitude ) ) ) ) , 2 ) AS distance ';

        return $query->select(
            'pharmacies.name as name', 'branches.name as branch', 
            DB::raw('CONCAT(branches.address1, ", ", branches.city, ", ", branches.state, ", ", branches.country) as address' ), 
            DB::raw($distance))
            ->join('pharmacies', 'branches.pharmacy_id', 'pharmacies.id');
    }
}
