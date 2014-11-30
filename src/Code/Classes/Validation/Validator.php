<?php
/**
 * Criação da Class Validator
 */

namespace Code\Classes\Validation;
use Code\Classes\Http\Request;
use Code\Classes\Forms\Interfaces\ValidatorInterface;
class Validator implements ValidatorInterface
{
	protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    private $rules = [];
    public function validate()
    {
        if(count($this->rules) == 0)
            throw new \InvalidArgumentException('Nenhuma regra de validação foi recebida');
        foreach($this->rules as $arrayRules){
            $element = $arrayRules['element'];
            $rules = $arrayRules['rules'];
            foreach($rules as $rule){
                if(isset($rule['params']))
                    $this->$rule['rule']($element, $rule['params']);
                else
                    $this->$rule['rule']($element);
            }
        }
    }
    public function addRule(Array $rule)
    {
        $this->rules[] = $rule;
    }
}