<?php
namespace Pform{
abstract class Container extends Html implements Values{

    /**
     *
     * To render the values
     * @var array
     */
    protected $_order = array();

    /**
     *
     * To set the values
     * @var array
     */
    protected $_elements = array();
    
    /**
     * 
     * @param string $htmlId
     */
    function __construct($htmlId)
    {
        $this->_addAttribute('data-uk-margin');
        parent::__construct($htmlId);
    }
    
    protected function _setElements(Html $element)
    {
	if(is_a($element,'Pform\Container')){
	    foreach($element->getElements() as $e){
		$this->_elements[$e->getId()] = $e;
	    }
	}elseif(is_a($element,'Pform\FormElement')){
            $this->_elements[$element->getId()] = $element;
        }
	return $this;
    }
    
    function getElements()
    {
        return $this->_elements;
    }
    
    function appendElement(Html $element)
    {
        $this->_order[] = $element;
        $this->_setElements($element);
        return $this;
    }
    
    function prependElement(Html $element)
    {
        $this->_order = array_merge(array($element),$this->_order);
        $this->_setElements($element);
        return $this;
    }
    
    function addElement(Html $element)
    {
       $this->appendElement($element);
       return $this;
    }
    
    function getValue($id)
    {
        return $this->_elements[$id]->getValue();
    }
    
    function setValues(array $params)
    {
        foreach($params as $key => $value){
            if(isset($this->_elements[$key])){
                $this->_elements[$key]->setValue($value);
            }
        }
        return $this;
    }
    
    function getValues()
    {
       $res = array();
       if($this->_elements){
           foreach($this->_elements as $e){
               $res[$e->getId()] = $e->getValue();
           }
       }
       return $res;
    }
    
    function render()
    {
        $h = array();
        if($this->_order){
            foreach($this->_order as $e){
		$h[] = $e->render();
            }
        }
        return implode('',$h);
    }
}
}