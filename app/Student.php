<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //

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
    public function allfunction()
    {
        return $this->hasOne(Allfunction::class);
    }


    /**
     * Get the Job Function record associated with the Student.
     */
    public function allindustry()
    {
        return $this->hasOne(Allindustry::class);
    }


    /**
     * Get the availabilty record associated with the Student.
     */
    public function availability()
    {
        return $this->hasOne(Availability::class);
    }

    /**
     * Get the skills for to the Student.
     */
    public function studentskills()
    {
        return $this->hasMany(Studentskill::class);
    }

    /**
     * Get the experiences for to the Student.
     */
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }


    /**
     * Get the Languages for to the Student.
     */
    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    /**
     * Get the Social Media for to the Student.
     */
    public function socialmedias()
    {
        return $this->hasMany(Socialmedia::class);
    }
}
