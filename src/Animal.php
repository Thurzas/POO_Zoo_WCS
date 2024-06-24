<?php
namespace App;
    class Animal
{
    public const CENTIMETERS_IN_METER = 100;
    public const SIZE_UNIT_CHANGE_LIMIT = 100;
    public const THREATENED_LEVELS = ['NE', 'DD', 'LC', 'NT', 'VU', 'EN', 'CR', 'EW', 'EX',];
    private string $name;
    private float $size = 100;
    private bool $carnivorous = false;
    private string $threatenedLevel = 'NE';
    private int $pawNumber;
    public function __construct(string $name,)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): float
    {
        return $this->size;
    }

    public function setSize(float $size): void
    {
        if ($size < 0) {
            $size = 0;
        }

        $this->size = $size;
    }

    public function getThreatenedLevel(): string
    {
        return $this->threatenedLevel;
    }

    public function setThreatenedLevel(string $threatenedLevel = 'NE'): void
    {
        if (in_array($threatenedLevel, self::THREATENED_LEVELS)) {
            $this->threatenedLevel = $threatenedLevel;
        }
    }

    public function isCarnivorous(): bool
    {
        return $this->carnivorous;
    }

    public function setCarnivorous(bool $carnivorous): void
    {
        $this->carnivorous = $carnivorous;
    }

    public function speak(string $lang = 'fr'): string
    {
        if ($lang === 'fr') {
            $message = 'Bienvenue au zoo, je suis un ';
        } else {
            $message = 'Welcome to the zoo, I\'am a ';
        }

        return $message . $this->name;
    }

    public function isDangerous(): bool
    {
        return $this->size > 50 && $this->carnivorous === true;
    }

    public function getSizeWithUnit(): string
    {
        if ($this->getSize() < self::SIZE_UNIT_CHANGE_LIMIT) {
            return $this->getSize() . 'cm';
        } else {
            return ($this->getSize() / self::CENTIMETERS_IN_METER) . 'm';
        }
    }
}
