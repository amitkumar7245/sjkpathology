<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'doctoruser_id',
        'country_id',
        'state_id',
        'city_id',
        'strem_id',
        'substrem_id',
        'course_id',
        'specialization_id',
        'bankname_id',
        'employeetype_id',
        'department_id',
        'designation_id',
        'locationname',
        'branchname',
        'ifsccode',
        'accountnumber',
        'accountholdername',
        'commission',
        'reg_number',
        'license_number',
        'doctor_sign',
        'collage_name',
        'year_of_completion',
        'degree',
        'hospital_name',
        'experience_from',
        'experience_to',
        'status',
        'created_by',
        'created_at' 
    ];


    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'doctoruser_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bankname_id');
    }

    
}
