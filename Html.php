<?php
namespace Pform{
abstract class Html
{
    protected $_class = array();
    
    protected $_attributes = array();
    
    function __construct($id) 
    {
        $this->_attributes['id'] = $id;
    }
    
    /**
     * 
     * An attribute can be of the type:
     * placeholer = 'Lastname'
     * or of the type
     * data-uk-margin
     * @param string $key
     * @param string $value
     * @return \Pform\Html
     */
    protected function _addAttribute($key,$value = '')
    {
        $this->_attributes[$key] = $value;
        $this->_class[$key] = $value;
        return $this;
    }
    
    protected function _removeAttribute($key)
    {
        unset($this->_attributes[$key]);
        unset($this->_class[$key]);
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    function getAttributes()
    {
        $attributes = '';
        if(!empty($this->_class)){
            $attributes = "class='".implode(' ',$this->_class)."' ";
        }
        if($this->_attributes){
            foreach($this->_attributes as $key => $value){
                if($value == ''){
                    $attributes = $attributes." {$key}";
                }else{
                    $attributes = $attributes." {$key}='{$value}' ";
                }
                
            }
        }
        return $attributes;
    }
    
    function getId()
    {
        return $this->_attributes['id'];
    }
    
    function addClass($value)
    {
        $this->_class[$value] = $value;
        return $this;
    }
    
    function removeClass($value)
    {
        unset($this->_class[$value]);
        return $this;
    }
    
    function getClassesArray()
    {
        return $this->_class;
    }
    
    function hasClass($value)
    {
        if(in_array($value,$this->_class)){
            return true;
        }
        return false;
    }
    
    abstract function render();
    
    function __toString()
    {
        return $this->render();
    }
}
}