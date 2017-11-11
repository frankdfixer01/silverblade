<?php 
    require('db/functions.php');
	include('controller/themechanger.php');
	include('controller/controller.php');
	include('template/header.php');
    include('template/image-template.php');
	require_once('template/modals.php');
?>

<div class="<?php echo $cont; ?>"  style="padding-top:10px">
        <div class="w3-col m2 left-table w3-left <?php echo $color.' '; echo $edge.' '; echo $box; ?>" style="margin-right:10px;margin-left:0px">
            <?php include('template/menu.php') ?>
        </div>
        <div class="w3-col m7">
            <?php include('template/about-template.php') ?>
        </div>
        <div class="w3-col m3 right-table w3-padding <?php echo $color.' '; echo $edge.' '; echo $box; ?> " style="margin-left:15px;width:22.5%">
            <?php include('template/calendar.php') ?>
        </div>
</div>
    <?php include('template/footer.php'); ?>


    
