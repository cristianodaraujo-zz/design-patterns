<?php
/**
 * Criação da classe Element
 */
namespace Code\Classes\Forms\Utils;
use Code\Classes\Forms\Interfaces\ElementInterfaces;


class Element implements ElementInterfaces
{
    public $tag;
    public  $properties;
    protected $elementsFilho;


    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function open()
    {
        echo "\n<{$this->tag}";
        if ($this->properties){
            foreach ($this->properties as $name=>$value){
                echo " {$name}=\"{$value}\"";
            }
        }
        echo ">\n";

    }

    public function close()
    {
        echo "</{$this->tag}>\n";
    }

    public function render()
    {
        $this->open();
    }
    
} 