<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //


    /**
     * Get the student that owns the experince.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
