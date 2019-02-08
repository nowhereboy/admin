<?php

namespace App;

class Menu extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'type', 'route',
    ];
}
