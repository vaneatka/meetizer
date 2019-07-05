<?php
// acest fisier ro\uleaza o singura data, cind rulam aplicatia web
include 'vendor/autoload.php';
include 'config.php';
define( 'LAZER_DATA_PATH' , $config['database_path']);
///////////// pregateste baza de date

// 1) creaza tabelul events
use Lazer\Classes\Database as Db;
use Lazer\Classes\Relation;

Db::create('events', /* denumire tabel*/
    // schema/ clasa
    [
        'id' => 'integer',
        'name' => 'string',
        'start_date' =>'string',
        'duration' => 'integer',
        'location_id'=>'integer' // legatura cu o locatie
    ]
);


Db::create('locations', /* denumire tabel*/
    // schema/ clasa
    [
        'id' => 'integer',
        'name' => 'string',
        'country' =>'string',
        'city' =>'string',
        'street' =>'string',
        'number' =>'string'             
    ]
);

Db::create('users', /* denumire tabel*/
    // schema/ clasa
    [
        'id'            => 'integer',
        'name'          => 'string',
        'create_date'   =>'string',
        'password'      => 'string',        
        'email'         => 'string'        
    ]
);

Db::create('tickets', /* denumire tabel*/  // acest tabel este pentru a lega users de events
    // schema/ clasa
    [
        'id'            => 'integer',
        'event_id'      => 'string',
        'user_id'       => 'string'            
    ]
);

Relation::table('tickets')
                        ->belongsTo('users')
                        ->localKey('user_id')
                        ->foreignKey('id')
                        ->setRelation();
Relation::table('tickets')
                        ->belongsTo('events')
                        ->localKey('event_id')
                        ->foreignKey('id')
                        ->setRelation();
                        
Relation::table('events')
                        ->belongsTo('locations')
                        ->localKey('location_id')
                        ->foreignKey('id')
                        ->setRelation();



?>