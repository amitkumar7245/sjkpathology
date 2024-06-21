<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestbloodGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['testblood_id','sampletype_id','testbloodgroup_name','testbloodgroup_code','testbloodgroup_slug','testbloodgroup_price','testbloodgroup_precautions','status', 'created_by', 'created_at'];

    public function getUser()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function testBlood()
    {
        return $this->belongsTo(TestBlood::class,'testblood_id','id');
    }

    public function testsampletype()
    {
        return $this->belongsTo(SampleType::class,'sampletype_id','id');
    }
}
