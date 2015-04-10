<?php
namespace Pform{
class Textarea extends FormElement
{
   
    function render()
    {
        $this->_innerHtml = "<textarea {$this->getAttributes()}></textarea>";
    }
    
    function isValid($value) {
        return true;
    }
}
}