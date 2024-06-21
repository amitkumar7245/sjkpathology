<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialization extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =['strem_id', 'substrem_id', 'course_id', 'specialization_name', 'specialization_slug', 'status', 'created_by', 'created_at'];

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
        return $this->belongsTo(Substrem::class, 'substrem_id', 'id');
    }

    public function getCourse()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

}
