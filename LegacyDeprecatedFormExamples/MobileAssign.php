<?php
namespace Pform{
class MobileAssign extends Form{
    
    public function __construct()
    {
	$username = new ElementText('username');
	$username->setReadOnly()->setLabel('Username')->setValue('lcandylaftis');
	$phonenumber = new ElementHidden('phone-number');
	$phonenumber->setValue('630538412');
	
	$phone = new Container('phone-number');
	
	$sim1 = new ElementText('sim1');
	$sim1->removeWrapper()->setReadOnly()->setLabel('Sim1')->setValue('123456789012-1');
	$device1 = new ElementText('device1');
	$device1->removeWrapper()->setReadOnly()->setLabel('Device1')->setValue('Nokia 452464889546');
	$removeSim1 = new ElementSubmit('remove-sim1');
	$removeSim1->setValue('Remove');
	$removeDevice1 = new ElementSubmit('remove-device1');
	$removeDevice1->setValue('Remove');
	$sim1Container = new Container('sim1');
	$sim1Container->setWrapper('p')
		->addClass('sim-container')
		->addElement($sim1)
		->addElement($removeSim1)
		->addElement($device1)
		->addElement($removeDevice1);
	
	
	$sim2 = new ElementText('sim2');
	$sim2->removeWrapper()->setReadOnly()->setLabel('Sim2');
	$device2 = new ElementText('device2');
	$device2->removeWrapper()->setReadOnly()->setLabel('Device2');
	
	//$removeSim2 = new ElementSubmit('remove-sim2');
	//$removeSim2->setValue('Remove');
	//$removeDevice2 = new ElementSubmit('remove-device2');
	//$removeDevice2->setValue('Remove');
	
	$addSim2 = new ElementSubmit('remove-sim2');
	$addSim2->setValue('Add')->addClass('add-button');
	$addDevice2 = new ElementSubmit('remove-device2');
	$addDevice2->setValue('Add')->addClass('add-button');
	
	$sim2Container = new Container('sim2');
	$sim2Container->setWrapper('p')
		->addClass('sim-container')
		->addElement($sim2)
		->addElement($addSim2)
		//->addElement($removeSim2)
		->addElement($device2)
		->addElement($addDevice2);
		//->addElement($removeDevice2);
	$phone->setHeader(630538412)
		->addElement($sim1Container)
		->addElement($sim2Container);

		
		
	$this->addElement($username)
		->addElement($phone);
	
	parent::__construct('mobile-assign');
    }
}
}