<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Substrem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =['strem_id', 'substrem_name', 'substrem_slug', 'status', 'created_by', 'created_at'];

    public function getUser()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function getStrem()
    {
        return $this->belongsTo(Strem::class,'strem_id','id');
    }
}

