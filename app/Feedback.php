<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'testimoni';
    protected $fillable = ['user_id','testimonial'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
