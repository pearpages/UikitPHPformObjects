<?php
namespace Pform{
class Input_Radio extends Input
{
    protected $_type = 'radio';

    function isValid($value) {
        return true;
    }
    
    function render()
    {
        return "<label><input {$this->getAttributes()} type='{$this->_type}' />{$this->_label}</label>";
    }
}
}