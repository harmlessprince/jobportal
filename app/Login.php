<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
     /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //


   /**
     * Get the student that owns the login.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

      /**
     * Get the Company that owns the login.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

      /**
     * Get the student that owns the login.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
