<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $fillable = ['firstname', 'lastname', 'body'];


    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
