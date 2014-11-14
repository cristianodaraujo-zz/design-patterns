<?php
/**
 * Criação da Class Registry
 */
namespace Code\Classes\Registry;

class Registry 
{
    protected static $values;


    static function set($index, $valor)
    {
        static::$values[$index] = $valor;
        
    }
    
    static function get($index)
    {
        if(!isset(static::$values[$index])) {
            throw new \InvalidArgumentException("Sem valor cadastrado com o indice {$index}");
        }
        return static::$values[$index];
    } 
}
