<?php

include '../database/Participant.php';
include '../database/Ticket.php';
include '../database/Event.php';

use organizer\database\Participant;
use organizer\database\Ticket;
use organizer\database\Event;

$t1 = new Ticket();
$t2 = new Ticket();

$p1 = new Participant('Jack', date("Y-m-d"), md5('****'), 'email@email.email');
$t1->setParticipant($p1);
$t2->setParticipant($p1);

$e1 = new Event('Hora de la Bordei', 'aprilie 2019', 8, 'Strada Ciuflea');
$e1->addParticipant($p1);
$e1->addTicket($t1);
$e1->addTicket($t2);


var_dump($p1);
?>