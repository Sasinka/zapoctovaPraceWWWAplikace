<?php

class View
{
    private $Model;
    private $data = null;
    function __construct($m) {
        $this->Model = $m;
    }

    function vypisHtml() {
        $this->data = $this->Model->vratData();
        //include "templates/".this->Model->vratSablonu().".php"
        include "templates/".$this->Model->vratSablonu().".php";
        //var_dump($this->data);
    }
}