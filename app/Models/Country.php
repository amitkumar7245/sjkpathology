<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =['country_name', 'sortname', 'phonecode', 'status', 'created_by', 'created_at'];

    public function getUser()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function diagnostics()
    {
        return $this->hasMany(Diagnostic::class, 'country_id');
    }

    public function collections()
    {
        return $this->hasMany(Collection::class, 'country_id');
    }

    // public function doctor()
    // {
    //     return $this->hasMany(Doctor::class, 'country_id');
    // }

}
