<?php

class Database{
    public $nameOfPost; 
    public $id;
    public $text;
   // public $posts =[];

    public function __construct(){
        $this->posts[0] = array('nameOfPost' => "String", 'id' => 0, 'text' => "text1");
        $this->posts[1] = array('nameOfPost' => "CHAR", 'id' => 1, 'text' => "
        Integer je proměnná 
        Je to hodně používaný typ proměnné. Použijeme ji například pokud budeme chtít zjistit nějaký číselný údaj který se číselně mění. Věk, cena, počet bodů. Jsou to věci nad kterými lze provádět matematické operace (sčítání, odčítání, násobení a dělení, porovnávání) Co ale tento typ není? Číslo popisné u domu, telefonní číslo, sedačka ve vlaku. Toto jsou sice číselné údaje ale nedává smysl je tímto způsobem používat. Co se stane když sečteme dvě telefonní čísla? jaký údaj z toho získáme? Když máme ale věk a odečteme ho od aktuální data tak můžeme zjistit kdy jsme se narodili. Pokud máme cenu můžeme na ní aplikovat slevu, a pokud máme nejvyšší dosažený počet bodů ve hře, v dalším kole se můžeme ho pokusit předčít (porovnat s novou hodnotou).
        Jak ale tedy budeme ukládat data? Data se ukládají jako Bajty (jedničky a nuly) takže jako osm jedniček nebo null ____ ____ To je domluva. 2 bajty je tedy nejmenší jednotka do které můžeme uložit nějaká data v počítači.
        ");
        return $this;
    }

 

    public function returnPost($id){
        //echo $this->posts[$id];
        return $this->posts[$id];
    }


}