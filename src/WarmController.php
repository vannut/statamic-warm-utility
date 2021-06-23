<?php

namespace Vannut\WarmUtility;



class WarmController
{

    public function index() 
    {
        return view('vannut::warm-utility', []);
    }

    public function warm() 
    {
        return "run statamic:static:clear and statamic:peak:warm";
    }

}