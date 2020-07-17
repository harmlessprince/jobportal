<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allindustry extends Model
{

     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //
     /**
     * Get the student that owns the industry.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
