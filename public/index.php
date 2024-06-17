<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$parrot = new Animal();
$elephant = new Animal();

$lion->name = 'lion';
$lion->pawNumber = 4;
$lion->carnivorous =true;
$lion->threatenedLevel ='VU';
$lion->size=123;

$parrot->name = 'parrot';
$parrot->pawNumber = 2;
$parrot->carnivorous =false;
$parrot->threatenedLevel ='NT';
$parrot->size=14;

$elephant->name = 'elephant';
$elephant->pawNumber = 4;
$elephant->carnivorous =false;
$elephant->threatenedLevel ='EN';
$elephant->size=275;

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>