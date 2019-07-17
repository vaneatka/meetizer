<?php

namespace organizer\database;

class Participant {
    public $id;
    public $name;
    public $created;
    public $password;
    public $email;
    public $tickets;
    
    public function __construct (string $name, string $created , string $password, string $email)
    {
        $this->name=$name;
        $this->created=$created;
        $this->password=$password;
        $this->email=$email;
        $this->tickets=[]; //lista de tickete cumparate de participant
    }
    
    public function addTicket($ticket){
        $this->tickets[]= $ticket;
    }

}


?>