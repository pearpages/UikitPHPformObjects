<?php
namespace Pform{
class RenderStrategy_Row extends RenderStrategy
{
    protected $_label = '';
    
    function setLabel($label)
    {
        $this->_label = $label;
        return $this;
    }
    
    function getLabel()
    {
        return $this->_label;
    }
    
    function render()
    {
        $h = array();
        $h[] = "<div class='uk-form-row'>";
            if($this->_label){
                $h[] = $this->getLabel();
                $h[] = "<label class='uk-form-label'>".$this->getLabel()."</label>";
            }
            $h[] = "<div class='uk-form-controls uk-form-controls-text'>";
            $h[] = $this->_innerHtml;
            $h[] = $this->_help;
            $h[] = "</div>";
        $h[] = "</div>";
        return implode('',$h);
    }
}
}