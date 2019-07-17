<?php

namespace organizer\database;

class Location {
    public $name;
    public $start_date;
    public $duration;
    public $adress;
    public $participants = [];


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
    // denumire name - string
    // data start - start-date - string
    // durata durations - int
    // adresa   adress- string
    // participanti []

    // constructor (fara participants)

    // addParticipant('Io Iooos')
    // 
}


?>