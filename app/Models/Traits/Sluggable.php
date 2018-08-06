<?php

namespace App\Models\Traits;

/**
 *
 */
trait Sluggable
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($event){
            $event->slug = str_slug($event->title);
        })
    }
}
