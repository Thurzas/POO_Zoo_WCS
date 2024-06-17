<?php

class Animal
{
    public string $name;
    public float $size = 100;
    public bool $carnivorous = false;
    public int $pawNumber;
    public string $threatenedLevel = 'NE';

    public function speak(string $lang = 'fr'): string 
    {
        $message="";
        if($lang ==='fr'){
            $message='Bienvenue au zoo, je suis un ';
        }
        else
            $message= 'Welcome to the zoo, I am a ';

        return $message. $this->name;
    }
    public function isDangerous(): bool
    {
        return $this->size > 50 && $this->carnivorous;
    }
}
