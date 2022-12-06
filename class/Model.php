<?php

class Model
{
    private $sablona = 'homepage';

    function __construct() {

    }

    public function vyberRoli($role){
        echo "inside vyberRoli"+$role;
       
    }

    public function vratData(){
        switch($this->sablona){
            case 'predmety': 
                return Config::$PREDMETY;

           /* case 'predmet': 
                return (object) array (
                    'predmety' => Config::$PREDMETY,
                    'detail' => this->predmet,
                    'odkazNaZapis' => 'index.php?zapis'
                )
            */
            default: 
                    return null;
        }
    }

    public function vratSablonu(){
        return $this->sablona;
    }

    public function zobrazPredmety(){
        $this->sablona = 'predmety';
    }
}