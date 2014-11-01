<?php
/**
 * Criação da classe Element
 */
namespace Code\Classes\Forms;

class Element
{
    private $name;
    private $properties;
    protected $elementsFilho;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function add($filho)
    {
        $this->elementsFilho[] = $filho;
    }

    private function open()
    {
        echo "<{$this->name}";
        if ($this->properties){
            foreach ($this->properties as $name=>$value){
                echo " {$name}=\"{$value}\"";
            }
        }
        echo '>';
    }

    public function render()
    {
        $this->open();
        echo "\n";
        if ($this->elementsFilho){
            foreach ($this->elementsFilho as $filho){
                if (is_object($filho)){
                    $filho->render();
                }elseif ((is_string($filho)) or (is_numeric($filho))){
                    echo $filho;
                }
            }
            $this->close();
        }
    }
    protected  function close()
    {
        echo "</{$this->name}>\n";
    }

} 