<?php 

namespace TV\models\Episode;

class Episode{
    public $name;
    public $duration_in_minutes;
    public $season;

    public function __construct(string $name)
    {
        $this->name = $name; 
        $this->duration_in_minutes = rand(38, 55); 
    }

    public function getDuration(){
        return (int)$this->duration_in_minutes;
    }
}


// Episode: (
    // string $name
    // int $duration_in_minutes
    // $season|Season            (legatura inversa cu obiectul sezonului din care face parte)
    //  )
?>