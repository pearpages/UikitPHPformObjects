<?php
namespace Pform{
interface Values{
    
    function setValues(array $values);
    
    /**
     * @return array
     */
    function getValues();
}
}