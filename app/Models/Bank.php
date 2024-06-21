<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =['bankname', 'bankcode', 'bank_slug', 'banklogo', 'status', 'created_by', 'created_at'];

    public function getUser()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'bankname_id');
    }
    
    // public function staff()
    // {
    //     return $this->hasMany(Doctor::class, 'bankname_id');
    // }
}
