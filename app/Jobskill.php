<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobskill extends Model
{
     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //

     /**
     * Get the job that owns the Skills.
     */
    public function portaljob()
    {
        return $this->belongsTo(Job::class);
    }
}
