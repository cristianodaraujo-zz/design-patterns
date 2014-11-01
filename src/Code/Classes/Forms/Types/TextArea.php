<?php
/**
 * Criação do tipo TextArea
 */
namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Element;
use Code\Classes\Forms\Field;

class TextArea extends Field
{

    public function __construct(Element $elementos, $nome)
    {
        parent::setNome($nome);
        $this->tag = $elementos;
        $this->tag->add($nome);
    }

    public function render()
    {
        $this->tag->name = $this->name;
        $this->tag->placeholder = $this->placeholder;
        $this->tag->class = $this->class;
        $this->tag->render();
    }
}