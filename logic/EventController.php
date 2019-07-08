<?php
// este o cutie care contine metode legate de evenimente
class EventController{
    // lista de evenimente
    public static function index(){
        $events = [
            ['title' => 'Event 1'],
            ['title' => 'Event 2'],
            ['title' => 'Event 3'],
        ];

        render( "events", ['events' => $events] );
    }

}


?>