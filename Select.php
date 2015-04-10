<?php
namespace Pform{
class ElementSelect extends FormElement
{
    protected $options = array();
    
    public function setOptions(array $options)
    {
        $this->options = $options;
        return $this;
    }
    
    public function addOptions(array $options)
    {
	$this->setOptions($options);
    }
    
    protected function renderOptions()
    {
        $html = array();
        
        foreach($this->options as $value => $description)
        {
            $selected = '';
            if($this->value == $value){
                $selected = "selected='selected'";
            }
            $html[] = "<option {$selected} value='{$value}'>{$description}</option>";
        }
        return implode('',$html);
    }
    
    public function render()
    {
        $this->input = "<select {$this->getIdTag()} {$this->getClassTag()} {$this->getNameTag()}>{$this->renderOptions()}</select>";
        return parent::render();
    }
}
}