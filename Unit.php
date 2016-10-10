<?php
namespace demo;


class Unit extends Word
{
    private $dictionary = [
        1 => 'один',
        2 => 'два',
        3 => 'три',
        4 => 'четыре',
        5 => 'пять',
        6 => 'шесть',
        7 => 'семь',
        8 => 'восемь',
        9 => 'девять',
    ];

    public function say() : string
    {
        if (($this->previous instanceof Ten && $this->previous->value === 1) ||
            !array_key_exists($this->value, $this->dictionary)) {
            return '';
        }

        if ($this->parent instanceof Thousand) {
            switch ($this->value) {
                case 1 :
                    return 'одна';
                case 2 :
                    return 'две';
            }
        }

        return $this->dictionary[$this->value];
    }
}