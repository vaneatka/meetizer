<?php 

namespace TV\models\Season;

use TV\models\Episode\Episode as Episode;

class Season {
    public $name;
    public $episodes;
    public $series;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->episodes = [];        
    }

    public function addEpisode(int $number,Episode $episode){
        $this->episodes[] = [$number  => $episode];
        $episode->season = $this;
    }

    public function getDuration(){
        $total_duration = 0;
        foreach($this->episodes as $episode){
            foreach($episode as $key => $value){
                $total_duration+=$value->getDuration();                                            
            }
        }
        return date('H:i', mktime(0, $total_duration));
    }
}


// Season:  (
    // string $name
    // array $episodes|Episode
    // $series|Series            (legatura inversa cu obiectul serialului din care face parte)
    // )
?>
