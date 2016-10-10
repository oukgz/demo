<?php
namespace demo;


class Million extends Phrase
{
    public function say() : string
    {
        return parent::say() . ' ' . $this->getWord();
    }

    private function getWord()
    {
        $value = 0;
        $last = $this->getLastWord();
        if ($last instanceof Unit) {
            $value = $last->value;
            if ($last->previous instanceof Ten && $last->previous->value === 1) {
                $value = 10 + $value;
            }
        }
        switch ($value) {
            case 1 :
                $word = 'миллион';
                break;
            case 2 :
            case 3 :
            case 4 :
                $word = 'миллиона';
                break;
            default :
                $word = 'миллионов';
        }

        return $word;
    }
}