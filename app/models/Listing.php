<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }
}
