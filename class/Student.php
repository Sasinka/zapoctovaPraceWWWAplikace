<?php

class Student
{
    private $jmeno;
    private $obor = '';
    private $id;

    function __construct($id, $jmeno, $obor) {
        $this->jmeno = $jmeno;
        $this->obor = $obor;
        $this->id = $id;
    }

}