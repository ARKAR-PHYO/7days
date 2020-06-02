<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citymaster extends Model
{
    protected $fillable = ['city_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function packagemasters()
    {
        return $this->hasMany(Packagemaster::class);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format("d/m/Y");
    }

    public function getUpdatedDateAttribute()
    {
        return $this->updated_at->format("d/m/Y");
    }

    public function getUrlAttribute()
    {
        return route('everlisttye.show', $this->id);
    }
}
