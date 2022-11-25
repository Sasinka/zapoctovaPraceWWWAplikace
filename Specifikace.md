# Webová aplikace na výuku datových typů

Jde o webovou aplikaci ve které se studenti/žáci  budou učit o datových typech. Aplikace si bude pamatovat progress daného studenta (podle IP. Adresy) po dobu X minut/dní.

## Datový konceptuální model

### Model

Model bude mít v databazi uložené výkladové texy, progress daného uživatele, který se ukazuje podle ip adresy

### View

Zobrazení dané části tematiky, vždy obsabuje teorii, příklad a odpověď která je z počátku skrytá.

### Controler

Zobrazuje látku podle správných odpovědí.

Půjde-li o jednoho uživatele a to o studenta. Možná bude i druhý uživatel učitel který uvidí všechen obsah – může neomezeně proklikávat?

---

Aplikace bude vzdělávací aplikací pro výuku datových typů. Člověk si zvolí o jakém datovém typu se chce naučit v rolovacím menu, nebo půjde step-by-step.

Aplikace si zapamatuje kde daný uživatel skončil a při znovu načtení stánky může pokračovat kde začal.

Aplikace bude mít nějakou možnost přeskočit určitou část – test nebo nějaké heslo. – to se bude využívat pro žáky (aby např. v jedné pc učebně mohly jít dvě třídy po sobě - každý žák si najde heso z minula nebo rychle projde znalostním testem) – učitelé mohou bezstarostně procházet.

Půjde pouze o FE část, takže pokud na začátku uživatel zaklikne že chce být žák bude žák a pokud zaklikne že chce být uživatel bude uživatel.

Po kliknutí na zapomenout data – aplikace zapomene roli a progress a člověk může začít od znova.

Na konci může vytvořit PDF? Se jménem – freemarker??? Jako osvědčení o zvládnutí kurzu.

Dívala jsem se na různé frameworky a chtěla bych dát šanci flask (php) nebo next.js ale možná to skončí u plain html, css, js.

---
## Funkcionální část

Půjde o jednoduchou webovou textovou aplikaci.

## Třídy:

### Uživatel 
- pohlaví, enum 
– uživatel (žák/učitel),
- tlačítko pro změnu, jméno

-  Getter, setter

-  Možnost přepsat za podmínky stisknutého tlačítka změnit a zároveň nulování tlačítka

## struktura lekcí 

- ty by  vsobě mohly mít progress

-   Lekce, podsekce a u nich Boolean které splnily

-  Hesla odemykající lekce

-   Status jestli je lekce odemknutá zavřená (řešeno na FE nebo v datech?)

## Testové otázky

- Napárované k lekci

- Vygenerovat otázku (nejen z této lekce ale I z těch předtím)

- Vygenerovat otázku z této lekce tzn vícero otázek k jedné lekci, při rychlo testu se objeví třeb ajen jedna, nebo po chybě dvě

---
## Další fuknční prvky
### Nápověda 
- učitelům se zobrazuje ihned
- studentům po chybně odpovězené otázce

---
Uživatel zvolí kdo je.

Vybere oblast – pokud jde od začátku objeví se text. Po něm otázka. Pokud odpoví dobře odemkne se další část, Pokud ne bude k tomu nápověda.

Pokud chce žák přeskočit vyplní otázky. Podle úspěšnosti ho to hodí tam kde si již není jistý.