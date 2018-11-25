<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GpEvent extends Model
{
    protected $table = 'events';

    public function causes()
    {
        return $this->belongsToMany('App\Cause', 'events_causes_rel', 'event_id', 'cause_id');
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'event_skills');
    }
}
