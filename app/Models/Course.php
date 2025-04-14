<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model


{
    
//     public function teachers(){


//         return $this->belongsTomany('App\Models\Teacher');
//     }


//     public function areas(){


//         return $this->belongsTo('App\Models\Area');
//     }

//     public function apprentices(){


//         return $this->hasmany('App\Models\Apprentice');
//     }

// public function training_centers(){


//     return $this->belongsTo('App\Models\Training_center');
// }

 
    protected $table = 'courses';  

    public function area()  
    {  
        return $this->belongsTo(Area::class);  
    }  

    public function trainingCenter()  
    {  
        return $this->belongsTo(TrainingCenter::class);  
    }  

    public function teachers()  
    {  
        return $this->belongsToMany(Teacher::class, 'course_teacher');  
    }  

    public function apprentices()  
    {  
        return $this->hasMany(Apprentice::class);  
    }  

}
