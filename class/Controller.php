<?php

class Controller
{
    private $Model;

    function __construct($m) {
        $this->Model = $m;
        $this->zkontroluj();
    }

    /** Kontrola pozadavku uzivatele (GET/POST)
     * @return void
     */
    //TODO
    private function zkontroluj() {
            //if(isset($_GET['predmety'])){
                $this->Model->zobrazPredmety();
            //}
    }

    


}