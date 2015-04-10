<?php
namespace Pform{
class MobileUserSelect extends Form{
    
    public function __construct()
    {
	$this->id = 'user-list-select';
	$this->action = '';
	$this->method = 'GET';
	
	$select = new ElementSelect('username');
	$select->addOptions(array(
	    'lcandylaftis' => 'lcandylaftis',
	    'lvicens' => 'lvicens',
	    'jverrey' => 'jverrey'
	));
	$submit = new ElementSubmit('submit');
	$submit->setValue('Update');
	
	$this->addElement($select)
		->addElement($submit);
    }
}    
}
