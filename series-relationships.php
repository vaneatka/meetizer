<?php 
  // in acest exemplu vi se propune sa creati o ierarhie
  // care permite sa pastram datele despre seriale TV/Video

  // Ideea principala este:
  
  // Series (Obiectul superior)
    // -> seasons[] (va contine o lista/array de sesoane: obiecte de tip Season)
    //           0 => Season (obiect#1)
    //           1 => Season (obiect#2)
    //           2 => Season (obiect#3)
                        // -> episodes[] (fiecare sezon contine o lista/array de epizoade
                                            // obiecte de tip: Episode)

    //   in aceasta constructie un obiect de tip Series (serial) domina asupra
    //   mai multor obiecte de tip Season
    //   iar fiecare obiect de tip Season domina asupra 
    //   mai multor obiecte de tip Episode

    // SE CERE
    // 1) sa se creeze urmatoarea structura de foldere
    // /src/TV/models/:
    //         Series.php 
    //         Season.php
    //         Episode.php
    // fiecare din cele 3 fisiere va contine cate o clasa cu acelasi nume
    // namespace-ul in care sunt declarate clasele - tre sa coincida cu dosarele
    // fara "src" - de ex. pentru Season: tv\models\Season

    // 2) sa se completeze clasele cu urmatoarele proprietati:
    // Series:  (
        // string $name
        // array $categories|string  (array de valori textuale care determina categoria serialului)
        // array $seasons|Season
    // )
    // Season:  (
        // string $name
        // array $episodes|Episode
        // $series|Series            (legatura inversa cu obiectul serialului din care face parte)
    // )
    // Episode: (
        // string $name
        // int $duration_in_minutes
        // $season|Season            (legatura inversa cu obiectul sezonului din care face parte)
    //  )
    
    // 3) sa se completeze clasele cu constructori:
    // ATENTIE!!! constructorii acestor 3 clase primesc doar "name"
    //            si seteaza valorile array-urilor egale cu "[]"
    // 4) raspundeti la intrebarea cum pot fi descrise relatiile intre
    //    Series - Season - Episode (one to many, many to many, many to one, one to one) ?
    //    in acest context puteti desena si o diagrama
    // 5) completati clasa Series cu metoda "addSeason(int $number, Season $season)"
    //    care primeste numarul sezonului si obiectul acestuia
    //    aceasta metoda trebuie sa aranjeze in proprietatea "seasons[]" din
    //    obiectul Series - sezonul primit IN POZITIA INDICATA
    //    de ex: $series->addSeason(3, new Season(...) ) ar adauga un obiect de tip
    //    sezon pe celula cu cheia "3" (array associativ!)
    // 6) dupa acelasi principiu ca in p. 5, adaugati in Season metoda 
    //    addEpisode(int $number,Episode $episode)
    //    ATENTIE!!! metodele din p. 5-6, dupa ce adauga obiectul respectiv in array
    //    tre sa creeze si legatura inversa - din partea obiectului adaugat - spre cel
    //    care il adauga.
    // 7) adaugati un getter numit getDuration() in toate 3 clasele care tre sa functioneze in
    //    urmatorul mod:
    //    * pentru Episode - returneaza numarul intreg de minute din proprietatea $duration 
    //    * pentru Season  - returneaza numarul intreg de ore si de minute calculand suma 
    //                       duratei epizoadelor din sezon
    //    * pentru Series  - returneaza numarul intreg de ore si de minute calculand suma   
    //                       duratei sezoanelor din serial
    // 8) adaugati prin composer "fzazinotto/faker" si generati un serial cu cateva sezoane
    //    si cateva epizoade in fiecare sezon
    // 9) adaugati o metoda in clasa Series numita "printHTML()" care va printa datele despre intreg
    //    serialul in urmatorul format:
        // > "Series name (2 Seasons, 6 episodes)"
        // > 1. "Season 1 name"
        // > 1. "Episode 1 Title"    [00:45]
        // > 2. "Episode 2 Title"    [00:40]
        // > 3. "Episode 3 Title"    [00:45]
        //   ....
        // > 2. "Season 2 name"
        // > 1. "Episode 1 Title"    [00:45]
        // > 2. "Episode 2 Title"    [00:40]
        // > 3. "Episode 3 Title"    [00:45]          
    // in acest scop puteti adauga orice alte metode ajutatoare in clasele respective
        
?>