<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GpEvent extends Model
{
    protected $table = 'events';

    public function causes()
    {
        $this->belongsToMany('App\Cause', 'events_causes_rel');
    }

    public function skills()
    {
        $this->belongsToMany('App\Skill', 'event_skills');
    }
}
