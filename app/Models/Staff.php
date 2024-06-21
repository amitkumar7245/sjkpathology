<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['staffuser_id', 'country_id', 'state_id', 'city_id', 'bankname_id', 'employeetype_id', 'department_id', 'designation_id', 'locationname', 'branchname', 'ifsccode', 'accountnumber', 'accountholdername', 'salary', 'commission', 'status', 'created_by', 'created_at'];

    // public function getUser()
    // {
    //     return $this->belongsTo(User::class,'created_by','id');
    // }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'staffuser_id');
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

    public function employeetype()
    {
        return $this->belongsTo(EmployeeType::class, 'employeetype_id');
    }
    public function department()
    { 
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function designation()
    { 
        return $this->belongsTo(Designation::class, 'designation_id');
    }

}
