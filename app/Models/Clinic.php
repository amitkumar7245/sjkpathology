<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'clinicuser_id',
        'state_id',
        'city_id',
        'clinic_name',
        'clinicowner_name',
        'gst_number',
        'phone_number',
        'telephonephone_number',
        'clinic_email',
        'latitude',
        'longitude',
        'clinic_address',
        'clinic_review',
        'status',
        'created_by',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'clinicuser_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

}
