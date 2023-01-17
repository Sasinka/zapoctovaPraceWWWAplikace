<?php require APPROOT.'/views/inc/header.php'?>
<!-- <p><?php echo $data['id'];?></p> -->
<?php $temp = "pages/post/".$data['id']+1;?>
<div class="post">
    <h1 class="nameOfPost"><?php echo $data['nameOfPost'] ?> </h1>
    <p><?php echo $data['text'] ?> </p>

    <!-- todo button next page-->
    <div class="buttonNext">
        <form action="index.php" method="get">
        <input type="submit" value='<?php echo $temp ?>' name="url">
        </form>
    </div>    
</div>



<?php require APPROOT.'/views/inc/footer.php'?>