<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    public function events()
    {
        $this->belongsToMany('App\GpEvent', 'event_skills');
    }

}
