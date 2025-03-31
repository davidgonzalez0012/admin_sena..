<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function teachers(){


        return $this->hasMany('App\Models\Teacher');
    }

    public function courses(){


        return $this->hasmany('App\Models\Course');
    }


}
