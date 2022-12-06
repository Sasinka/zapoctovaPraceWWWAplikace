<?php

class Predmet
{
    public $id;
    public $nazev;
    public $kapacita;

    public function __construct($id, $n, $k)
    {
        $this->id = $id;
        $this->nazev = $n;
        $this->kapacita = $k;
    }

}