<?php
/**
 * Criação da classe Field
 */
namespace Code\Classes\Forms;
use Code\Classes\Forms\Element;

class Field
{
    protected $name;
    protected $placeholder;
    protected $tag;
    protected $class;

    function __construct(Element $elementos, $nome)
    {
        self::setNome($nome);
        $this->tag = $elementos;
        $this->tag->class = $nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->name = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->name;
    }

    /**
     * @param mixed $value
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }



    public function setProperty($nome, $value)
    {
        $this->tag->$nome = $value;
    }
} 