<?php

namespace Tanthanhdev96\First;

class First
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }

    public function goodBye(String $sName)
    {
    	return 'Good bye ' . $sName;
    }
}