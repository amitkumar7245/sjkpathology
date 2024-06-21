<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountID extends Model
{
    use HasFactory;
    protected $table = 'tokens';
    protected $fillable =['start_dt', 'end_dt', 'updated_no'];
}
