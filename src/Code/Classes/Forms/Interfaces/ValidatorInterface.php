<?php
/**
 * Criação da Interface Validator
 */

namespace Code\Classes\Forms\Interfaces;

interface ValidatorInterface
{
    public function validate();
    public function addRule(Array $rule);
}