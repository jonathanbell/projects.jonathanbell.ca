<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    /**
     * Ensure that tools is stored as JSON and available as a PHP array.
     *
     * @var array
     */
    protected $casts = [
        'tools' => 'array',
        'major' => 'boolean'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'tools', 'url', 'start_date', 'major'
    ];

}
