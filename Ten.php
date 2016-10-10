<?php
namespace demo;


class Ten extends Word
{
    private $dictionary = [
        1 => 'десять',
        2 => 'двадцать',
        3 => 'тридцать',
        4 => 'сорок',
        5 => 'пятьдесят',
        6 => 'шестьдесят',
        7 => 'семьдесят',
        8 => 'восемьдесят',
        9 => 'девяносто',
    ];

    private $subDictionary = [
        1 => 'одиннадцать',
        2 => 'двенадцать',
        3 => 'тринадцать',
        4 => 'четырнадцать',
        5 => 'пятнадцать',
        6 => 'шестнадцать',
        7 => 'семнадцать',
        8 => 'восемнадцать',
        9 => 'девятнадцать'
    ];

    public function say() : string
    {
        if ($this->value === 1 && $this->next instanceof Unit) {
            return $this->subDictionary[$this->next->value];
        }
        return $this->dictionary[$this->value];
    }
}