<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentskill extends Model
{
     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //

     /**
     * Get the student that owns the Skill.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
