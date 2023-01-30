<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-vidthinitial-scale=1.0">
  <!--  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">
    <title><?php echo SITENAME;?></title>

</head>
<body>
<h1 class="header">Učíme se datové typy</h1>
<?php  $nextPage = "http://localhost:4000/public?url=pages/post/".$data['id'];
/*setcookie("lastpage", $temp , time() + (86400 * 30), "/");*/ $cookie_name= "lastpage";?>
<div class="menu">
    <a href="http://localhost:4000/public/index.php?url=pages/post/0">teorie</a>
    <a href="http://localhost:4000/public/index.php?url=pages/index.php">welcome</a>
    <a href="http://localhost:4000/public/index.php?url=pages/about.php">about</a>
   <!--<a href="<script>localStorage.getItem('lastVisitedPage')</script>" >poslední</a>-->
    <a id="last-visited-link" href='<?php echo $vypis?>'>Last Visited Page</a>
</div>
<p><?php echo $vypis; ?> </p>

<?php  if(null!= $data['id']){$temp = "pages/post/".$data['id'];
/*setcookie("lastpage", $temp , time() + (86400 * 30), "/"); $cookie_name= "lastpage";*/}?>

<?php
//obsluha lastpage button
if(!isset($_COOKIE[$cookie_name])) {
 // echo "Cookie named '" . $cookie_name . "' is not set!";
  $vypis = "http://localhost:4000/public/index.php?url=pages/about.php";
  echo "vítejte na stránce: ";
} else {
  
  $vypis = "http://localhost:4000/public?url=pages/post/".$_COOKIE[$cookie_name];
  echo "poslední navštívená stránka! ".$vypis;
}

?>
