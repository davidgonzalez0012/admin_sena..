<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model


{
    
    public function teachers(){


        return $this->belongsTomany('App\Models\Teacher');
    }


    public function areas(){


        return $this->belongsTo('App\Models\Area');
    }

    public function apprentices(){


        return $this->hasmany('App\Models\Apprentice');
    }

public function training_centers(){


    return $this->belongsTo('App\Models\Training_center');
}

}
