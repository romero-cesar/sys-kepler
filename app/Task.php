<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
