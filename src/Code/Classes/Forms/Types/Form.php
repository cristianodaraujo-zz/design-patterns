<?php
/**
 * Criação da classe Form
 */
namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Utils\Element;
use Code\Classes\Forms\Interfaces\FormInterface;
use Code\Classes\Validation\Validator;

class Form implements FormInterface
{
    public $nome;

    function __construct(Validator $validados, $nome)
    {
        $this->nome = $nome;
    }

    public function createField(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->name = "form_contato";
        $tag->class = "form-horizontal";
        $tag->action = "";//"dados.php";
        $tag->method = 'post';
        $tag->render();
    }
    
    public function close(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->close();  
    }
} 