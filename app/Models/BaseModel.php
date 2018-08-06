<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Sluggable;

class BaseModel extends Model
{
    protected $guarded = [];

    // public function getRouteKeyName(){
    //     return 'slug';
    // }

    use Sluggable;

}
