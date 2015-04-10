<?php
namespace Pform{
class RenderStrategy_Normal extends RenderStrategy
{
    function render()
    {
        return $this->_innerHtml.$this->_help;
    }
}
}