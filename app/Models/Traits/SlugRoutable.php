<?php

namespace App\Models\Traits;


/**
 *
 */
trait SlugRoutable
{
    function getRouteKeyName()
    {
        return 'slug';
    }
}
