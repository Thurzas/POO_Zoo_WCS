<?php
    namespace App;

    final class Snake extends Reptile
    {
        private $pawNumber = 0;
        public function __construct($name)
        {
            parent::__construct($name, $this->setPawNumber($this->getPawNumber()));
            $this->setCarnivorous(true);
        }
    }