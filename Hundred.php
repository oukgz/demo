<?php
namespace demo;


class Hundred extends Word
{
    private $dictionary = [
        1 => 'сто',
        2 => 'двести',
        3 => 'триста',
        4 => 'четыреста',
        5 => 'пятьсот',
        6 => 'шестьсот',
        7 => 'семьсот',
        8 => 'восемьсот',
        9 => 'девятьсот',
    ];

    public function say() : string
    {
        return $this->dictionary[$this->value];
    }
}