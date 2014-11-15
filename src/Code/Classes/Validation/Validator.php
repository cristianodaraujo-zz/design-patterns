<?php
/**
 * Criação da Class Validator
 */

namespace Code\Classes\Validation;
use Code\Classes\Http\Request;

class Validator
{
    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

}
