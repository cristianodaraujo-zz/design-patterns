<?php
/**
 * Criação da interface FormInterface
 */

namespace Code\Classes\Forms\Interfaces;
use Code\Classes\Forms\Utils\Element;

interface FormInterface 
{
    public function createField(Element $element);
    
    public function close(Element $element);
}
