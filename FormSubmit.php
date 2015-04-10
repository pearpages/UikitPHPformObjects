<?php
namespace Pform{ 
class FormSubmit extends Form{
   
    function render()
    {
	$this->addElement(new Button('submit', 'Submit', 'submit'));
	return parent::render();
    }
    
}
}