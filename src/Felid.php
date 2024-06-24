<?php
    namespace App;  

    final class Felid extends Mammal
    {
        public function __construct($name)
        {
            parent::__construct($name, $this->setPawNumber($this->getPawNumber()));
            $this->setCarnivorous(true);
        }
    }