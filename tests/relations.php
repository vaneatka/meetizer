<?php

// autoload  //  try catch daca a fost creata baza
//https://github.com/Greg0/Lazer-Database/blob/master/docs/tutorial.md
// de creat un eveniment care are loc in o anumita locatie, in care participa 3 participanti
// extrageti evenimentul cu locatie si cu lista participantilor
include '../vendor/autoload.php';
include '../config.php';
define( 'LAZER_DATA_PATH' , $config['database_path']);
use Lazer\Classes\Database as Db;
use Lazer\Classes\Relation;

// $location = Db::table('locations');
// $location->name= 'Dealu Mare';
// $location->country= 'Moldova';
// $location->city= 'Pirlita';
// $location->street= 'Valea Iazului';
// $location->street= '200500/5';
// $location->save();

// $event = Db::table('events');
// $event->name = 'Tropaiala';
// $event->start_date = '2018-05-06';
// $event->duration = 25;
// $event->location_id = 2;
// $event->save();

// $user = Db::table('users');
// $user->name = 'Jimmy Hendrix';
// $user->create_date = '1996-10-15';
// $user->password = 'paappass';
// $user->email = 'emailer@4.lo';
// $user->save(); 
// $user = Db::table('users');
// $user->name = 'Horea Brenciu';
// $user->create_date = '1998-06-01';
// $user->password = 'paappass';
// $user->email = 'emaile2r@eeem.lo';
// $user->save(); 
// $user = Db::table('users');
// $user->name = 'Bill Gates';
// $user->create_date = '1994-02-11';
// $user->password = 'paappass';
// $user->email = 'emaile5r@eeem.lo';
// $user->save(); 

// $ticket= Db::table('tickets');
// $ticket->event_id = 1;
// $ticket->user_id = 1;
// $ticket->save();

// $ticket= Db::table('tickets');
// $ticket->event_id = 1;
// $ticket->user_id = 2;
// $ticket->save();

// $ticket= Db::table('tickets');
// $ticket->event_id = 1;
// $ticket->user_id = 3;
// $ticket->save();

$event_to_find = Db::table('tickets')
                                        ->with("events")
                                        ->with('users')
                                        ->where('event_id', '=', 1)
                                        ->findAll();


// var_dump($event_to_find);
print '<br/>';
var_dump($loc_to_find);
print '<br/>';
foreach($event_to_find as $user){
    var_dump($user);
    print '<br/>';
}
?>