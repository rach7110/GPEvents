<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $table = 'causes';

    public function events()
    {
        $this->belongsToMany('App\GpEvent', 'events_causes_rel');
    }
}
