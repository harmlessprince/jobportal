<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portaljob extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //


    const CREATED_AT = 'start_date';
    const UPDATED_AT = 'last_update';

     /**
     * Get the Job Function record associated with the Job.
     */
    public function allfunction()
    {
        return $this->hasOne(Allfunction::class);
    }


    /**
     * Get the Job Function record associated with the Job.
     */
    public function allindustry()
    {
        return $this->hasOne(Allindustry::class);
    }


    /**
     * Get the skills for to the Student.
     */
    public function jobskills()
    {
        return $this->hasMany(Studentskill::class);
    }

     /**
     * Get the Company that owns the job.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
