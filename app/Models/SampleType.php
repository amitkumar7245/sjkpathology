<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SampleType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['sampletype_name', 'status', 'created_by', 'created_at'];

    public function getUser()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

}
