<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal('lion',4);
$lion->setCarnivorous(true);
$lion->setSize(123);
$lion->setThreatenedLevel('VU');

$parrot = new Animal('parrot',2);
$parrot->setSize(14);
$parrot->setThreatenedLevel('NT');

$elephant = new Animal('elephant',4);
$elephant->setSize(275);
$elephant->setThreatenedLevel('LC');

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>