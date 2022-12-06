<?php
$roleC= "roleForCookie";
$value="notSet1";
if(!isset($_COOKIE[$roleC])) 
{
setcookie($roleC, $value, time()+60*1000, '/');
echo $_COOKIE[$roleC];
}else {echo "already set";}

/* function button2() {
     $role = "ucitel";
     echo "This is ".$role." that is selected";
 }*/

$cookieInfo = "Empty cookie info<br>";

?>

<!html DOCTYPE>
<body>
<h1> Chci se dozvědět něco o datových typech. <h1><br>
<h2> Jsem: <?php ?></h2> <br>

 <form method="get" action="prvni.php">
    <input type="submit" name="zak" id="1" value="Žák" />
    <input type="submit" name="ucitel" value="Učitel" />

</form>


<?php


function button1() {//tady je problém 
    echo "<h1>Button1 </h1>";
    
   // setcookie( "roleForCookie", "zacek", time()+24*7*60*60*1000, '/');
    
    //session_start();
    $role = "zak";
    $value = "zak";
    //setcookie( $GLOBALS['roleC'], "zacek");
    //echo "This is ". $GLOBALS['roleC']." that is selected";
    
    //cookieInfo();
    
 }


 if(array_key_exists('zak', $_POST)) {
    button1();
}
else if(array_key_exists('ucitel', $_POST)) {
    button2();
}

 function cookieInfo(){
    if(!isset($_COOKIE[$GLOBALS['roleC']])) {
        $GLOBALS['cookieInfo'] =  "Cookie named '" . $_COOKIE[$GLOBALS['roleC']] . "' is not set!";
      } else {
        $GLOBALS['cookieInfo'] =  "Cookie '" .$_COOKIE[$GLOBALS['roleC']]."' is set!<br>";
        $GLOBALS['cookieInfo'] = $GLOBALS['cookieInfo'] .  "Value is: " .  $_COOKIE[$GLOBALS['roleC']];
      }
    }  

    ?>
</body>
</html>


