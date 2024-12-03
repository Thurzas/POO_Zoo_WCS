<?php
    namespace App;  

    final class Equid extends Mammal
    {
        public function __construct($name)
        {
            parent::__construct($name, $this->setPawNumber($this->getPawNumber()));
            $this->setCarnivorous(false);
        }
    }