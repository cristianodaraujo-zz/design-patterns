<?php
/**
 * Criação do tipo Label
 */
namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Field;
use Code\Classes\Forms\Element;

class Label extends Field
{
    public $class;

    public function __construct(Element $elementos ,$placeholder)
    {
        $this->setPlaceholder($placeholder);
        $this->tag = $elementos;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    public function render()
    {
        $this->tag->class = $this->class;
        $this->tag->add($this->placeholder);
        $this->tag->render();
    }



}