<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'reg_number',
        'name',
        'username',
        'email',
        'password',
        'phone',
        'gender',
        'dob',
        'doj',
        'aadharnumber',
        'address',
        'role',
        'status',
        'created_by',
        'created_at'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    static public function getSingle($id)
    {
        return self::find($id);
    }
    
    static public function getEmailSingle($email)
    {
        return User::where('email', '=', $email)->first();
    }

    static public function getTokenSingle($remember_token)
    {
        return User::where('remember_token', '=', $remember_token)->first();
    }

    public function diagnostic()
    {
        return $this->hasOne(Diagnostic::class, 'diauser_id');
    }

    public function diagnostics()
    {
        return $this->hasMany(Diagnostic::class, 'diauser_id');
    }

    public function collection()
    {
        return $this->hasOne(Collection::class, 'collectionuser_id');
    }
    
    public function createdStaff()
    {
        return $this->hasMany(Staff::class, 'created_by');
    }

    public function staff()
    {
        return $this->hasOne(Staff::class, 'staffuser_id');
    }

    // public function bank()
    // {
    //     return $this->belongsTo(Bank::class, 'bankname_id');
    // }
    
    public function doctor()
    {
        return $this->hasOne(Doctor::class, 'doctoruser_id');
    }
    public function pathdoctor()
    {
        return $this->hasOne(Pathdoctor::class, 'doctoruser_id');
    }

    public function clinics()
    {
        return $this->hasMany(Clinic::class, 'clinicuser_id');
    }

    public function clinic()
    {
        return $this->hasOne(Clinic::class, 'clinicuser_id');
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'staffuser_id');
    }

}
