<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =['country_id', 'state_id', 'city_name', 'status', 'created_by', 'created_at'];

    public function getUser()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function getCountry()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
    public function getState()
    {
        return $this->belongsTo(State::class,'state_id','id');
    }

    public function diagnostics()
    {
       return $this->hasMany(Diagnostic::class, 'city_id');
    }

    public function collections()
    {
        return $this->hasMany(Collection::class, 'city_id');
    }

}
