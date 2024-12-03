<?php
    namespace App;  

    class Arachnide extends Arthropode
    {
        private $pawNumber = 8;

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

                $message = 'Bienvenue humain, moi je suis un arachnide et mon nom est ';
            } else {

                $message = 'Welcome human, I\'am an arachnid and my name is  ';
            }
            return $message . $this->getName();
        }
    }