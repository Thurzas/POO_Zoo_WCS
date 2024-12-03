<?php
    namespace App;  

    final class Crocodilian extends Reptile
    {
        public function __construct($name)
        {
            parent::__construct($name, $this->setPawNumber($this->getPawNumber()));
            $this->setCarnivorous(true);
        }
    }