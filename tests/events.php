<?php
// inregistram si cream citeva events cu baza de date
include '../vendor/autoload.php';
include '../config.php';
define( 'LAZER_DATA_PATH' , $config['database_path']);
use Lazer\Classes\Database as Db;


// cream 1-2 evenimente

$event = Db::table('events');
// $event->name= 'First Event';
// $event->start_date = '2019-01-01';
// $event->duration = 100;
// $event->save();
// $event->name= 'Second Event';
// $event->start_date = '2019-02-01';
// $event->duration = 300;
// $event->save();

// obinem toate inregisrarile


$event_list = $event
                    // ->where('start_date', '>=', '2019-01-02')
                    ->orderBy('start_date','DESC')
                    ->findAll()
                    ->asArray()
                    // ->find(3)
                    // ->delete();
                    ;
var_dump($event_list);


?>