<?php 
include('Globals.php');
$value = "none";
if(array_key_exists('zak', $_GET)) {
    $value = "zak";
   // button1();
}
else if(array_key_exists('ucitel', $_GET)) {
    //button2();
    $value = "ucitel";
}
setcookie($roleC, $value, time()+24*7*60*60*1000, '/');


 function writeRole(){
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
   echo "<h1> Jsem:".$_COOKIE[$GLOBALS['roleC']]."</h1>";
 }

?>
<!DOCTYPE html>
<head>

</head>
<body>
   
<?php writeRole()?>

<h1> Kapitola </h1> 
    
</body>


</html>