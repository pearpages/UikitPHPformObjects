<?php
namespace Pform{
abstract class FormElement extends Html
{  
    protected $_value = null;
    
    protected $_name = '';
    
    protected $_help;
    
    protected $_required = false;
    
    /**
     *
     * @var RenderStrategy_Row
     */
    protected $_renderStrategy;
    
    function __construct($name)
    {
        $this->_renderStrategy = new RenderStrategy_Row();
        parent::__construct($name);
        $this->_addAttribute('name',$name);
        return $this;
    }
    
    function setReadOnly($default = true)
    {
	if($default){
            $this->_addAttribute('readonly');
        }else{
            $this->_removeAttribute('readonly');
        }
        return $this;
    }

    function isRequired()
    {
	return $this->_required;
    }
    
    function setRequired($default = true)
    {
        if($default){
            $this->_addAttribute('required');
        }else{
            $this->_removeAttribute('required');
        }
        return $this;
    }
    
    function setDisabled($default = false)
    {
        if($default){
            $this->_addAttribute('disabled');
        }else{
            $this->_removeAttribute('disabled');
        }
        return $this;
    }
    
    function setValue($value)
    {
        $this->_addAttribute('value',$value);
	return $this;
    }
    
    function getValue()
    {
        return $this->_attributes['value'];
    }
        
    function getName()
    {
        return $this->_attributes['name'];
    }

    function setSizeNormal()
    {
        $this->removeClass('uk-form-large');
        $this->removeClass('uk-form-small');
        return $this;
    }
    
    function setSizeSmall()
    {
        $this->removeClass('uk-form-large');
        $this->addClass('uk-form-small');
        return $this;
    }
    
    function setSizeLarge()
    {
        $this->addClass('uk-form-large');
        $this->removeClass('uk-form-small');
        return $this;
    }
    
    function setWidthNormal()
    {
        $this->removeClass('uk-form-width-large');
        $this->removeClass('uk-form-width-medium');
        $this->removeClass('uk-form-width-small');
        $this->removeClass('uk-form-width-mini');
        return $this;
    }
    
    function setWidthLarge()
    {
        $this->setWidthNormal();
        $this->addClass('uk-form-width-large');
        return $this;
    }
    
    function setWidthMedium()
    {
        $this->setWidthNormal();
        $this->addClass('uk-form-width-medium');
        return $this;
    }
    
    function setWidthSmall()
    {
        $this->setWidthNormal();
        $this->addClass('uk-form-width-small');
        return $this;
    }
    
    function setWidthMini()
    {
        $this->setWidthNormal();
        $this->addClass('uk-form-width-mini');
        return $this;
    }
    
    function setNoStyle($default = true)
    {
        if($default){
            $this->addClass('uk-form-blank');
        }else{
            $this->removeClass('uk-form-blank');
        }
        return $this;
    }
    
    /**
     * 
     * of type 1-1, 1-2, 1-4...
     * @param string $width
     */
    function setWidth($width)
    {
        $this->setWidthNormal();
        $this->addClass('uk-width-'.$width);
    }

    function setHelpInline($text)
    {
        $this->_help = "<span class='uk-form-help-inline'>{$text}</span>";
    }
    
    function setHelpBlock($text)
    {
        $this->_help = "<p class='uk-form-help-block'>{$text}</p>";
    }
    
}}