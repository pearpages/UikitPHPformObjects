<?php
namespace Pform{
class MobileUser extends Form{

    public function __construct()
    {
	$id = new ElementText('id');
	$id->setLabel('id')
		->setReadOnly();
	$username = new ElementText('username');
	$username->setLabel('Username');
	$firstname = new ElementText('firstname');
	$firstname->setLabel('Firstname');
	$lastname = new ElementText('lastname');
	$lastname->setLabel('Lastname');
	
	$updateNassign = new ElementSubmit('update-n-assign');
	$updateNassign->setValue('Update and assign');
	$update = new ElementSubmit('update');
	    $update->setValue('Update');

	$container = new Container('userdata');
	$container->setHeader('Userdata')
		->addElement($id)
		->addElement($username)
		->addElement($firstname)
		->addElement($lastname);
			    
	$this->addElement($container);
	
	$hccNumber = new ElementText('hcc');
	$hccNumber->setDataType('telephone')->setLabel('Hcc');
	$privateNumber = new ElementText('private');
	$privateNumber->setDataType('telephone')->setLabel('Private');
	
	$container2 = new Container('phones');
	$container2->setHeader('Phones')
		->addElement($hccNumber)
		->addElement($privateNumber);
	
	$this->addElement($container2)
	->addElement($update)
		->addElement($updateNassign);
    }
    
}
}
