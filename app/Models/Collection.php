<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['collectionuser_id', 'country_id', 'state_id', 'city_id', 'locationname', 'status', 'created_by', 'created_at'];


    public function user()
    {
        return $this->belongsTo(User::class, 'collectionuser_id','name');
    }
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function diagnostics()
    {
        return $this->belongsToMany(Diagnostic::class, 'diagnostics');
    }


}
