<?php
/**
 * Criação do tipo Entry
 */
namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Field;

class Entry extends Field
{
    public function render()
    {
        $this->tag->name = $this->name;
        $this->tag->placeholder = $this->placeholder;
        $this->tag->class = $this->class;
        $this->tag->type = 'text';
        $this->tag->render();
    }

} 