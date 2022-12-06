<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Detail předmětu</title>
</head>
<body>
    <h1> Hello world</h1>
    <a href="index.php?predmety">Výpis předmětů</a>
    <a href="">Výpis studentů</a>

    <ol>
        <?php foreach($this->data as $pr):?>
            <li><a href=""> <?= $pr->nazev?> </a></li>
        
       <?php endforeach; ?>
    </ol>

  <?php 
    var_dump($predmety);
   ?>

</body>
</html>