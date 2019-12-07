<!-- Start Count Section -->
<?php  if ($displaynumberssection) { ?>
<div class="numbers">
   <div class="container-fluid">
      <?php if($numbers) { ?>
      <h1><?php echo $numbers ?></h1>
      <?php } ?>
      <div class="row-fluid numbers-counter">
         <div class="span3">
            <?php if($numbers1icon) { ?>
            <div class="pull-left image-counter"><img src="<?php echo $numbers1icon ?>" alt="" /></div>
            <?php } ?>
            <div class="pull-left text-con">
               <?php if($numbers1count) { ?>
               <span class="counter"><?php echo $numbers1count ?></span>
               <?php } ?>
               <?php if($numbers1heading) { ?>
               <span class="count-info"><?php echo $numbers1heading ?></span>
               <?php } ?>
            </div>
         </div>
         <div class="span3">
            <?php if($numbers2icon) { ?>
            <div class="pull-left image-counter"><img src="<?php echo $numbers2icon ?>" alt="" /></div>
            <?php } ?>
            <div class="pull-left text-con">
               <?php if($numbers2count) { ?>
               <span class="counter"><?php echo $numbers2count ?></span>
               <?php } ?>
               <?php if($numbers2heading) { ?>
               <span class="count-info"><?php echo $numbers2heading ?></span>
               <?php } ?>
            </div>
         </div>
         <div class="span3">
            <?php if($numbers3icon) { ?>
            <div class="pull-left image-counter"><img src="<?php echo $numbers3icon ?>" alt="" /></div>
            <?php } ?>
            <div class="pull-left text-con">
               <?php if($numbers3count) { ?>
               <span class="counter"><?php echo $numbers3count ?></span>
               <?php } ?>
               <?php if($numbers3heading) { ?>
               <span class="count-info"><?php echo $numbers3heading ?></span>
               <?php } ?>
            </div>
         </div>
         <div class="span3">
            <?php if($numbers4icon) { ?>
            <div class="pull-left image-counter"><img src="<?php echo $numbers4icon ?>" alt="" /></div>
            <?php } ?>
            <div class="pull-left text-con">
               <?php if($numbers4count) { ?>
               <span class="counter"><?php echo $numbers4count ?></span>
               <?php } ?>
               <?php if($numbers4heading) { ?>
               <span class="count-info"><?php echo $numbers4heading ?></span>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Count Section -->
<script>
   jQuery(document).ready(function( $ ) {
       $('.counter').counterUp({
           delay: 10,
           time: 1000
       });
   });
</script>