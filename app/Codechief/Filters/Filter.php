<?php

namespace Codechief\Filters;
use Codechief\Model\User;

class Filter {

    public function __construct(){

    }

    public function SayHello(){
        return 'Hello World';
    }

    public function GetDataFromUserClass(User $class){
        return $class->Display();
    }
}

