<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'account_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student_internship()
    {
        return $this->hasOne('App\Internship', 'user_id');
    }

    public function professor_internships()
    {
        return $this->hasMany('App\Internship', 'professor_id');
    }

    public function scopeAdmins($query)
    {
        $query->where('account_type', '=', '1');
    }
}
