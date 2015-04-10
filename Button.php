<?php
namespace Pform{
    class Button extends FormElement{
	
        protected $_description;
        
        function __construct($name,$description,$value)
        {
            $this->addClass('uk-button');
            $this->_description = $description;
            $this->setValue($value);
            parent::__construct($name);
        }
        
	function render()
	{
	    $this->_renderStrategy->setInnerHtml("<button {$this->getAttributes()}>".$this->_description."</button>");
	    return $this->_renderStrategy->render();
	}
        
        function isValid($value) {
            return true;
        }
    }
}