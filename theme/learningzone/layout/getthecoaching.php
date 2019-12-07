<!-- Start Coaching Section -->        
<?php  if ($displaygetthecoaching) { ?>
<div id="getcoaching" class="featurette">
   <div class="container-fluid">
      <img src="<?php echo $getthecoachingimage ?>" class="featurette-image pull-left">
      <div class="pull-left getcoachingtext-con">
         <?php if($getthecoachingheading) { ?>
         <h2 class="featurette-heading">
            <?php echo $getthecoachingheading ?>
         </h2>
         <?php } ?>
         <?php if($getthecoachingcontent) { ?>
         <h5>
            <?php echo $getthecoachingcontent ?>
         </h5>
         <?php } ?>
         <?php if($getthecoachingbuttontext) { ?>
         <a href="<?php echo $getthecoachingbuttonurl ?>" class="btn btn-primary draw meet"><?php echo $getthecoachingbuttontext ?></a>
         <?php } ?>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<?php } ?>
<!-- End Coaching Section -->