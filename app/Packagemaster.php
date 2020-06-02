<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packagemaster extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function citymaster()
    {
        return $this->belongsTo(Citymaster::class);
    }
}
