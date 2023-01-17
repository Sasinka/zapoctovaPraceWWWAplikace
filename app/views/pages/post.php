<?php require APPROOT.'/views/inc/header.php'?>
<p><?php echo $data['id'];?></p>
<div class="post">
    <h1 class="nameOfPost"><?php echo $data['nameOfPost'] ?> </h1>
    <p><?php echo $data['text'] ?> </p>

    <!-- todo button next page-->
    <form action="inbdex.php" method="get">
    <input type="submit" value="1" name="currentPage">
    </form>
</div>
<?php 
    if(isset($_GET['btn']) && $_GET['btn'] == "další"){
        post(1);
    }
?>


<?php require APPROOT.'/views/inc/footer.php'?>