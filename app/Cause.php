<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $table = 'causes';

    public function events()
    {
        $this->belongsToMany('App\Event', 'events_causes_rel');
    }
}
