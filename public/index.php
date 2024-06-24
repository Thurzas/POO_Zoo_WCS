<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Other/Animal.php';
require __DIR__ . '/../src/Area.php';
require __DIR__ . '/../src/Mammal.php';
require __DIR__ . '/../src/Felid.php';
require __DIR__ . '/../src/Bird.php';
require __DIR__ . '/../src/Fish.php';
require __DIR__ . '/../src/Equid.php';
require __DIR__ . '/../src/Reptile.php';
require __DIR__ . '/../src/Crocodilian.php';
require __DIR__ . '/../src/Snake.php';
require __DIR__ . '/../src/Arthropode.php';
require __DIR__ . '/../src/Arachnide.php';
require __DIR__ . '/../src/Spider.php';
require __DIR__ . '/../src/Insect.php';

use App\Animal;
use App\Other\Animal as OtherAnimal;
use App\Area;
use App\Mammal;
use App\Bird;
use App\Fish;
use App\Felid;
use App\Equid;
use App\Reptile;
use App\Crocodilian;
use App\Snake;
use App\Arthropode;
use App\Arachnide;
use App\Spider;
use App\Insect;

$savana = new Area('savana');
$jungle = new Area('jungle');
$desert = new Area('desert');
$areas = [$savana,$jungle];

//======== FELID =================

$lion = new Felid('lion');
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$tiger = new Felid('tiger');
$tiger->setSize(70);
$tiger->setThreatenedLevel('VU');

//=========Bird===================

$parrot = new Bird('parrot');
$parrot->setSize(30);

//=============Mammals============
$elephant = new Mammal('elephant');
$elephant->setThreatenedLevel('LC');

$zebra = new Equid('Zebra');
$zebra->setThreatenedLevel('NT');

//===========Reptile=============
$python = new Snake('python');
$alligator = new Crocodilian('Alligator');


//=======Creepy arachnides========
//   guys ! i'm arachnophobian =(
$scorpio = new Arachnide('scorpio');
$nightmarishCreep = new Spider('Tarantula');
$bee = new Insect('bee');
//======good Insects=============
// why do i prefer insects ? beccause of the Tarantula's killer named Pepsis heros (it's a Thchad wasp)

$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$savana->addAnimal($zebra);

$jungle->addAnimal($parrot);
$jungle->addAnimal($python);
$jungle->addAnimal($alligator);
$jungle->addAnimal($nightmarishCreep);
$desert->addAnimal($scorpio);
$animals = [$lion, $parrot, $elephant, $zebra, $python, $alligator, $scorpio, $nightmarishCreep, $bee];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>