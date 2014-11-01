<?php
/**
 * Criação da classe Form
 */
namespace Code\Classes\Forms;
use Code\Classes\Forms\Element;

class Form
{
    private   $nome;

    function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function render(Element $elementos)
    {
        $tag = $elementos;
        $tag->class = "form-horizontal";
        $tag->name = $this->nome;
        $tag->action = "";//dados.php";
        $tag->method = 'post';
        $tag->render();
    }
} 