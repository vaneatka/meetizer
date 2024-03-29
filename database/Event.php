<?php

namespace organizer\database;

class Event{
    public $name;
    public $start_date;
    public $duration;
    public $adress;
    public $participants = [];
    public $tickets = [];


    public function __construct(string $name, string $start_date, int $duration, string $adress)
    {
        $this->name = $name;
        $this->start_date = $start_date;
        $this->duration = $duration;
        $this->adress = $adress;
    }

    public function addParticipant($name){
        $this->participants[] = $name;
    }

    public function addTicket($name){
        $this->tickets[] = $name;
    }
  
}


?>