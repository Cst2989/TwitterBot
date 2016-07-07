<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = 'tracking'; 
    protected $fillable = [
    	'twitter_id',
    ];
    public function scopeLatestFirst($query)
    {
    	return $query->orderBy('twitter_id','desc');
    }
}
