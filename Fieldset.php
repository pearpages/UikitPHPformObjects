<?php
namespace Pform{
class Fieldset extends Container{
    
    protected $_legend = '';
    
    function setLegend($value)
    {
        $this->_legend = $value;
        return $this;
    }
    
    /**
     * 
     * @param string $htmlId
     */
    function __construct($htmlId,$legend)
    {
        $this->_legend = $legend;
        $this->_addAttribute('data-uk-margin');
        parent::__construct($htmlId);
    }
    
    function render()
    {
	$h = array();
        $h[] = "<fieldset {$this->getAttributes()}>";
        if(!empty($this->_legend)){
            $h[] = "<legend>{$this->_legend}</legend>";
        }
	$h[] = parent::render();
	$h[] = '</fieldset>';
        
        return implode('',$h);
    }
}
}