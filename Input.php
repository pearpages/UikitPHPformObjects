<?php
namespace Pform{
    abstract class Input extends FormElement{

        const CONST_SUCCESS = 'uk-form-success';
        const CONST_DANGER = 'uk-form-danger';
        
	protected $_type;
        
        protected $_icon = '';
        
        function __construct($name,$label)
        {
            parent::__construct($name);
            $this->_renderStrategy->setLabel($label);
        }

	function render()
	{
             if($this->_icon == ''){
                $this->_renderStrategy->setInnerHtml("<input {$this->getAttributes()} type='{$this->_type}' />");
            }else{
                $h = array();
                $h[] = '<div class="uk-form-icon">';
                $h[] = '<i class="uk-icon-calendar"></i>';
                $h[] = "<input {$this->getAttributes()} type='{$this->_type}' />";
                $h[] = "</div>";
                $this->_renderStrategy->setInnerHtml(implode('',$h));
            }
	    return $this->_renderStrategy->render();
	}
        
        function setPlaceholder($value)
        {   
            //in fact the attribute is overriden
            $this->_addAttribute('placeholder',$value);
            return $this;
        }
        
        function setIcon($iconName)
        {
            $this->_icon = $iconName;
            return $this;
        }
        
        function removeIcon()
        {
            $this->setIcon('');
        }
    }
}