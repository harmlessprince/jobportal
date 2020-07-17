<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    //


    /**
     * Get the login record associated with the Admin.
     */
    public function login()
    {
        return $this->hasOne(Login::class);
    }
}
