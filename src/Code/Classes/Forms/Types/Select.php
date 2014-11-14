<?php
/**
 * Criação do tipo Select
 */

namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Interfaces\FormInterface;
use Code\Classes\Forms\Utils\Element;

class Select implements FormInterface
{
    public $nome;
    public $class;
    
    function __construct($nome)
    {
        $this->nome = $nome;
    }
    
    public function setClass($class) {
        $this->class = $class;
    }

    public function createField(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->class = $this->class;
        $tag->render();
    }
    
    public function close(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->close(); 
    }
    
}
