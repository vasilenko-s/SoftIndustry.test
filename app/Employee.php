<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'photo',
        'sociability', 'engineering', 'timemanagment', 'languages'
    ];

    /**
     * The projects that belong to the employee.
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }
}
