<?php
namespace Pform{
class Input_Hidden extends Input
{
    protected $_type = 'hidden';

    function isValid($value) {
        return true;
    }
}
}