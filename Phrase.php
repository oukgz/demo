<?php
namespace demo;


abstract class Phrase extends Word
{
    private $dividers = [
        1000000000000 => Trillion::class,
        1000000000 => Billion::class,
        1000000 => Million::class,
        1000 => Thousand::class,
        100 => Hundred::class,
        10 => Ten::class,
        1 => Unit::class
    ];

    protected $words = [];

    public function __construct(int $number)
    {
        parent::__construct($number);
        $this->map($number);
    }

    public function add(Word $word)
    {
        if ($this->previous instanceof Word) {
            $this->previous->setNext($word);
            $word->setPrevious($this->previous);
        }
        $this->previous = $word;
        $word->setParent($this);
        array_push($this->words, $word);
    }

    public function say() : string
    {
        $phrase = '';
        foreach ($this->words as $word) {
            $phrase .= $word->say() . ' ';
        }

        return trim($phrase);
    }

    protected function map(int $number) {
        $this->words = [];
        foreach ($this->dividers as $divider => $class) {
            $integer = intval($number / $divider);
            if ($integer >= 1) {
                $this->add(new $class($integer));
                $number = $number % $divider;
            }
        }
    }

    protected function getDictionary() : array
    {
        return [];
    }

    protected function getLastWord()
    {
        if (!$this->words) {
            return null;
        }
        return $this->words[count($this->words) - 1];
    }
}