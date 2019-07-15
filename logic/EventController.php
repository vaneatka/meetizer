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

    public static function add(){
        global $countries;
        render('event-form', [
            "countries" => $countries,
            "error_date_past" => get_messages("error-date-past"),
            "error_name_short" => get_messages("error-name-short")
            ]
        );
    }

    public static function save(){
        global $v;
        $name = $_POST['name'] ?? "";
        if(!$v::stringType()->length(3, null)->validate($name)){            
            set_message("Name too short","error-name-short", "error");
        }

        $start_date = $_POST['start_date'] ?? "";
        if(!$v::date()->between('now', null)->validate($start_date)){            
            set_message("Wrong date","error-date-past", "error");
        }
      

        header('location: ?q=/events/add');

        // var_dump(get_messages("error-date-past"));

    }

}


?>