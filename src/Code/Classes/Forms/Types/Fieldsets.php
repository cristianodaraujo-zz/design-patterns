<?php
/**
 * Criação da classe Fieldsets
 */
namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Interfaces\FormInterface;
use Code\Classes\Forms\Utils\Element;

class Fieldsets implements FormInterface
{
    public $nome;
    public $param;
    public $value;
    
    function __construct($nome)
    {
        $this->nome = $nome;
    }
    
    public function getParam() {
        return $this->param;
    }

    public function setParam($param) {
        $this->param = $param;
    }
    
    public function setValue($value) {
        $this->value = $value;
    }

    public function createField(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->name = $this->value;
        $tag->render();
    }
    
    public function close(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->close(); 
    }
    
}
