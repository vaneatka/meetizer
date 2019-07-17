<?php 
namespace TV\models\Series;

use TV\models\Season\Season as Season; 


class Series {
    public $name;
    public $categories;
    public $seasons;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->categories = [];
        $this->seasons = [];
    }

    public function addSeason(int $number, Season $season){
        $this->seasons[] = [$number => $season]; 
        $season->series = $this;
    }

    public function getDuration(){
        $total_duration = 0;
        foreach($this->seasons as $ses){
            $total_duration += $ses->getDuration();
        }
        return date('H:i', mktime(0, $total_duration));
    }

    public function toHTML(){
        
        print    "<h1>$this->name</h1>";
        
    }
}

// Series:  (
    // string $name
    // array $categories|string  (array de valori textuale care determina categoria serialului)
    // array $seasons|Season
    // )
?>
 