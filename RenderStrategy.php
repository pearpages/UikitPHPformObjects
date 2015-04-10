<?php
namespace Pform{
    abstract class RenderStrategy{
        
        protected $_innerHtml = '';
        
        protected $_help = '';
        
        /**
         * 
         * @param string $html
         */
        function setInnerHtml($html)
        {
            $this->_innerHtml = $html;
        }
        
        function setHelp($html)
        {
            $this->_help = $html;
        }
        
        abstract function render();
    }
    }