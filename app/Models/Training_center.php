<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    public function teacher(){


        return $this->hasMany('App\Models\Teacher');
    }


    public function courses(){


        return $this->hasmany('App\Models\Course');
    }


}
