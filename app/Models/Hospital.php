<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['hospitaluser_id', 'country_id', 'state_id', 'city_id', 'diagnostic_id', 'zonename_id', 'locationname', 'specialization', 'specialtest', 'routetest', 'diagnosspecialtest', 'diagnosroutetest', 'registration_number', 'license_number', 'doctor_sign', 'status', 'created_by', 'created_at'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zonename_id', 'id');
    }

    public function diagnostic()
    {
        return $this->belongsTo(Diagnostic::class, 'diagnostic_id', 'id');
    }
}
