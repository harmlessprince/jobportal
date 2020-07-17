<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //

    /**
     * Get the student that owns the avaialability.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
