<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    

    public function area(){


        return $this->belongsTo('App\Models\Area');
    }

    public function training_centers(){


        return $this->belongsTo('App\Models\Training_center');
    }

    public function courses(){


        return $this->belongsTomany('App\Models\Course');
    }








}
