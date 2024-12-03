<?php
    namespace App;  

    class Bird extends Animal
    {
        private $pawNumber = 2;

        public function __construct(string $name)    
        {
    
            parent::__construct($name, $this->pawNumber);
    
        }
        
        public function getPawNumber(): int
        {
            return $this->pawNumber;
        }

        protected function setPawNumber(int $pawNumber): void
        {
            if ($pawNumber < 0) {
                $pawNumber = 0;
            }
            $this->pawNumber = $pawNumber;
        }
    }