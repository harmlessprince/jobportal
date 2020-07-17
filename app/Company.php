<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the login record associated with the Student.
     */
    public function login()
    {
        return $this->hasOne(Login::class);
    }

    /**
     * Get the Job Function record associated with the Student.
     */
    public function allindustry()
    {
        return $this->hasOne(Allindustry::class);
    }

    /**
     * Get the Jobs  to the Company.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    /**
     * Get the Social Media for to the Comapny.
     */
    public function socialmedias()
    {
        return $this->hasMany(Socialmedia::class);
    }
}
