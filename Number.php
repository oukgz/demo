<?php
namespace demo;


class Number extends Phrase
{
    private $currentBase = 10;

    public function rebase(int $base) {
        if ($this->currentBase !== $base) {
            switch ($base) {
                case 8 :
                    $this->currentBase = 8;
                    $this->value = decoct($this->value);
                    $this->map($this->value);
                    break;
                case 10 :
                    $this->currentBase = 10;
                    $this->value = octdec($this->value);
                    $this->map($this->value);
                    break;
            }
        }
        return $this;
    }
}