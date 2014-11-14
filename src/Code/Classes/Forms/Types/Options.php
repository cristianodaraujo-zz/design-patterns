<?php
/**
 * Criação do tipo Options
 */

namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Utils\Element;
use Code\Classes\Forms\Interfaces\FormInterface;

class Options implements FormInterface
{
    public $nome;
    public $param;
            
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

    public function createField(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->render();
    }
    
    public function close(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->close();  
    }
}
