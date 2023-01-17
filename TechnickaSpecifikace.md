# Učíme se datové typy 
Jde o webovou aplikaci napsané v jazyce php, html, css. Je postavená na architektuře MVC. 

Tato aplikace obsahuje články, které vysvětlují datové typy. Aplikace je čistě názorná, texty které obsahuje jsou čistě výplňkové, zatím **nemá edukativní** charakter.

Aplikace má za cíl ukázat porozumění architektuře MVC.

## Spuštění aplikace
Pro aplikaci musíte mít běžící php server. Apliakci spsutíte lokálně přes adresu: 
> *XXX/public/index.php?url=pages/post*

kde  XXX značí cestu k vašemu localhostu, případně další složky.

## Index.php
Je soubor který se volá. Je to hlavní soubor. Inicializuje soubor bootstrap.php, který obsahuje seznam všech souborů, resp funkci která načítá všechny důležité třídy pro zobrazování jednotlivých částí aplikace.

dále inicializuje třídu Core.

## Core 
Tato třída skrládá url, pomocí kterého se dále volá daná třída. 

## Database 
Databáze textů. Jde o asociativní pole které obsahuje vždy tři prvky **nameOfPost** - které uchovává název příspěvku (článku), **text**  - který obsahuje samotný text příspěvku a **id** které využíváme u plnění šablony (třídy) post.php

## Post
Třída která je zároveň šablonou, volá hlavičku (header.php) a patičku (footer.php). Mezitím je šablona textu. 

Šablona obsahuje část post, která je vystylovaná ve style.css stejně jako veškeré css. style.css je voláno v hlavičce souboru. 

Poté je zde název článku a samtný text článku. 
Následuje tlačítko které mění hodnotu (id) článku, toto se volá v controleru Pages, který je "dítětem" controlleru Controller. 

Nakonec obsahuje talčítko které zvyšuje číslo článku.

## Pages 
Controller vybírá podle url o jakou šablonu jde, mám zde zatím tři šablony (ve složce views/pages) about, index, post. Skládá url a odesílá do view data. 

Zajímavé pro nás bude asi funkce post(id), která má za vstup id článku a posílá na view daná data, která se plní z databáze, podle id článku. 

## Závěrem
Projektu chybí mnoho, je velmi osekaný od původního zadání, ale myslím žejsem strukturu MVC pochopila. Nejvíce času mi zabralo pochopení MVC, a až moc času jsem vynaložila na skládání článků. Věřím že kdybych to měla dělat znovu, tak bych se musela nad MVC strukturou zamyslet daleko víc. bohužel jsem se zaměrila na tuto jednu funkčnost a tedy pro větší variabilitu by bylo nutné projekt značně předělat. 