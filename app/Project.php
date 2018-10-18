<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The employees that belong to the project.
     */
    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
}
