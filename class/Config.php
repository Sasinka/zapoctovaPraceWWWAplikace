<?php


class Config {
	private $predmety = array('Matematika I','Matematika II', 'Programování', 'Didaktika informatiky');

    public static $PREDMETY = array(); //všechny instance dědí tyhle hodnoty 

	public static $SKUPINY = array(
		array('id' => 1, 'nazev' => 'Projekt 1'),
		array('id' => 2, 'nazev' => 'Projekt 2'),
		array('id' => 3, 'nazev' => 'Projekt 3')
	);


    public function __construct() {
        foreach ($this->predmety as $ind => $nazev) {
            self::$PREDMETY[] = new Predmet($ind+1, $nazev, 20);
        }
    }
}