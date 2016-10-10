<?php
namespace demo;


abstract class Word
{
    /**
     * @var int value of number
     */
    protected $value;

    /**
     * @var Word the previous word in a chain
     */
    protected $previous;

    /**
     * @var Word the next word in a chain
     */
    protected $next;

    /**
     * @var Word the parent word
     */
    protected $parent;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    protected function setPrevious(Word $word)
    {
        $this->previous = $word;
    }

    protected function setNext(Word $word)
    {
        $this->next = $word;
    }

    protected function setParent(Word $word)
    {
        $this->parent = $word;
    }

    public abstract function say() : string;

    public function add(Word $word)
    {
        throw new \Exception('the word can not contains an other word');
    }
}