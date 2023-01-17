<?php

class Database{
    public $nameOfPost; 
    public $id;
    public $text;
   

    public function __construct(){
        $this->posts[1] = array('nameOfPost' => "String", 'id' => 1, 'text' => "String je textový řetězec. Obecně není omezený, resp. každý jazyk ho omezuje jinak. ");

        $this->posts[0] = array('nameOfPost' => "CHAR", 'id' => 0, 'text' => "Již jsme si popsali číselné datové typy. Nyní se přesuneme ke složitějším. Kromě čísel, počítače umí zobrazovat i písmena, slova třeba ty, které právě čtete. Nejprve si ale ukážeme jak se reprezentuji jednotlivá písmena (angl. Characters), tak se jmenuje i daný datový typ character neboli char. <br>
        V počítači jsou reprezentovane pomoci 2 bajtů neboli osmi bitů. Písmena jsou typicky reprezentována pomocí kódu ktere jsou definovány podle nějakého kodovaní. Nejrozšířenější je asi ASCII tabulka: https://www.asciitable.com/ <br>
        V tabulce výš můžeme vidět 5 sloupečků, první nám říká dekadickou hodnotu, druhý heaxadecimální (viz hexadecimální soustava), další oktadecimální,, čtvrtý kód v html a pátý a poslední sloupec ukazuje daný znak.
        Ascii tabulka je číselná reprezentace různých znaků, které můžeme vidět v pc. Za povšimnutí stojí, že pro nás lidi zajímavými znaky tedy písmeny začíná až na čísle 65.<br><br>
        Pokud bych chtěla napsat například den v týdnu - pondělí, musím si najít v posledním sloupci P (80) O (79) N (78) D (68) E(69) L (76) I (73). A co tato čísla znamenají, to je způsob jakým je dané písmeno uloženo v paměti počítače. Za to že se nám se na obrazovce zobrazí slovo “pondělí” může daný interpreter, například textový editor.
        ASCII tabulka má ale své nedostatky. Rozsah je 2 bitový, ale neobsahuje například české háčky a čárky a kroužek. Proto bychom pro napsání českého textu, například věty “Příliš žluťoučký kůň úpěl ďábelské ódy” tato věta totiž obsahuje všechny české háčky čárky a kroužek.<br><br>
        ASCII tabulka tedy rozhodně není jedinou tabulkou pro převod písmen do počítačového jazyka. Nejrozšířenější mezinárodní je asi UTF-8 která je kódována pomocí 1, 2 ,3 a 4 bajtů. TO jakou verzi použijeme je na nás, protože druhá obsahuje přirozeně i první atd.<br><br>
        Pokud kódujeme pouze pomocí 1 bajtu, pak máme 127 znaků, tedy anglickou abecedu a zákaldní znaky. Pokud kódujeme dvěma bajty máme už i české znaky nebo třeba celou řeckou abecedu! Jde přeci jen již o 1920 různých znaků. Kódování pomocí 3 bajtů v sobě ma i znaky asijských řečí a 4 bajtů v sobě má i máo použvané znaky nebo třeba smiliky.
        Výhoda UTF je že byl navržen pro zpětnou kompatibilitu s ACSII takže prvních 127 znaků je shodných.<br>");

        $this->posts[2] = array('nameOfPost' => "Integer", 'id' => 2, 'text' => "Integer je proměnná 
        Je to hodně používaný typ proměnné. Použijeme ji například pokud budeme chtít zjistit nějaký číselný údaj který se číselně mění. Věk, cena, počet bodů. Jsou to věci nad kterými lze provádět matematické operace (sčítání, odčítání, násobení a dělení, porovnávání) Co ale tento typ není? Číslo popisné u domu, telefonní číslo, sedačka ve vlaku. Toto jsou sice číselné údaje ale nedává smysl je tímto způsobem používat. Co se stane když sečteme dvě telefonní čísla? jaký údaj z toho získáme? Když máme ale věk a odečteme ho od aktuální data tak můžeme zjistit kdy jsme se narodili. Pokud máme cenu můžeme na ní aplikovat slevu, a pokud máme nejvyšší dosažený počet bodů ve hře, v dalším kole se můžeme ho pokusit předčít (porovnat s novou hodnotou). <br><br>
        Jak ale tedy budeme ukládat data? Data se ukládají jako Bajty (jedničky a nuly) takže jako osm jedniček nebo null ____ ____ To je domluva. 2 bajty je tedy nejmenší jednotka do které můžeme uložit nějaká data v počítači.");

        $this->posts[3] = array('nameOfPost' => "Boolean", 'id' => 3, 'text' => "Můžu jít Ven? Je k obědu něco dobrého? Měli jsme úkol z matematiky? Funguje ti počítač? Máš heslo na wifi? Všechno tohle jsou otázky které klademe každý den. I v normálním lidském jazyce máme dva typy otázek, zjišťovací a doplňující. Na zjišťovací otázky odpovídáme celou větou a na doplňovací odpověďmi ano, ne.<br><br>
        Pokud bychom se na takovou otázku chtěli zeptat a uložit ji použijeme dvouhodnotovou proměnnou. Říkáme jí boolean.
        ");

        $this->posts[4] = array('nameOfPost' => "ukazatel", 'id' => 4, 'text' => "Ukazuje na místo v paměti (například na jinou proměnnou nebo na určitý prvek pole).");
        return $this;
    }

 

    public function returnPost($id){
        return $this->posts[$id];
    }


}