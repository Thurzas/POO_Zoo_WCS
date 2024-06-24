<?php
    namespace App;  

    class Mammal extends Animal
    {
        private $pawNumber = 4;

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
        public function speak(string $lang = 'fr'): string
        {
            if ($lang === 'fr') {

                $message = 'Bienvenue humain, moi aussi je suis un mammifère et mon nom est ';
            } else {

                $message = 'Welcome human, I\'am a mammal too and my name is  ';
            }
            return $message . $this->getName();
        }
    }