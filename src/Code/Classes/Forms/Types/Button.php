<?php
/**
 * Criação do tipo Button
 */
namespace Code\Classes\Forms\Types;
use Code\Classes\Forms\Field;

class Button extends Field
{
    private $action;
    private $label;
    private $formName;

    /**
     * @param mixed $action
     */
    public function setAction($action, $label)
    {
        $this->action = $action;
        $this->label = $label;
    }

    /**
     * @param mixed $formName
     */
    public function setFormName($name)
    {
        $this->formName = $name;
    }

    public function render()
    {
        $url = $this->action->serialize();
        $this->tag->type = 'submit';
        $this->tag->value = $this->label;
        $this->tag->name = 'enviar';
        $this->tag->onclick = "document.{$this->formName}action'{$url}'; document{$this->formName}.submit()";
        $this->tag->render();
    }
} 