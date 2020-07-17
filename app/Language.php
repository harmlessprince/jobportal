<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //

     /**
     * Get the student that owns the langaiges.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
