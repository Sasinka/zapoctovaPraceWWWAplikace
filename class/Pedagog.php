<?php

class Pedagog
{
    private $id;
    private $jmeno;

    function __construct($id, $jmeno) {
        $this->id = $id;
        $this->jmeno = $jmeno;
    }
}