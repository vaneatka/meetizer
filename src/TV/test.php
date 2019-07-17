<?php
require '../../vendor/autoload.php';
include '../../vendor/fzaninotto/faker/src/autoload.php';
include 'models/Series.php';
include 'models/Season.php';
include 'models/Episode.php';

use TV\models\Series\Series;
use TV\models\Season\Season;
use TV\models\Episode\Episode;
$faker = Faker\Factory::create();


$ser1 = new Series($faker->name);

for ($season = 0; $season < 5; $season++) { 
    $ser1->addSeason($season, new Season($faker->company));
    for ($ep=1; $ep < 6; $ep++) { 
        $ser1->seasons[$season][$season]->addEpisode($ep, new Episode($faker->name));
        # code...        
    }
    
}

dump($ser1);

?>