<?php

namespace organizer\database;

class Ticket {
    public $id;
    public $participant;
    public $event;
    public function __construct ($participant = null, $event = null)
    {
        $this->participant=$participant;       
        $this->event=$event;       
    }

    public function setParticipant($participant){
        $this->participant=$participant;
        $this->participant->addTicket($this);
    }

    public function setEvent($event){
        $this->event=$event;
        $this->event->addTicket($this);
    }

}



?>