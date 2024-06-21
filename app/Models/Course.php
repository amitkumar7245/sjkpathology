<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['course_name','course_slug','strem_id', 'substrem_id', 'status', 'created_by', 'created_at'];

    public function getUser()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function getStrem()
    {
        return $this->belongsTo(Strem::class,'strem_id','id');
    }

    public function getSubstrem()
    {
        return $this->belongsTo(Substrem::class,'substrem_id','id');
    }
}
