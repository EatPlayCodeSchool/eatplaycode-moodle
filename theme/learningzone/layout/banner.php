<!-- Start Banner -->
<div class="callbacks_container">
   <ul class="rslides" id="slider3">
      <li>
         <img src="<?php echo $banner1image ?>" alt="First Slider">
         <div class="container-fluid">
            <div class="row-fluid">
               <div class="caption span4">
                  <?php if($bannerheading) {?>
                  <h1>
                     <?php echo $bannerheading ?>
                  </h1>
                  <?php } ?>
                  <?php if($bannertagline) { ?>
                  <p>
                     <?php echo $bannertagline ?>
                  </p>
                  <?php } ?>
                  <?php if($bannerbuttontext) { ?>
                  <a class="btn btn-primary" href="<?php echo $bannerbuttonurl ?>"><?php echo $bannerbuttontext ?></a>
                  <?php } ?>
               </div>
            </div>
         </div>
      </li>
      <li>
         <img src="<?php echo $banner2image ?>" alt="Second Slider">
         <div class="container-fluid">
            <div class="row-fluid">
               <div class="caption span4">
                  <?php if($bannerheading) {?>
                  <h1>
                     <?php echo $bannerheading ?>
                  </h1>
                  <?php } ?>
                  <?php if($bannertagline) { ?>
                  <p>
                     <?php echo $bannertagline ?>
                  </p>
                  <?php } ?>
                  <?php if($bannerbuttontext) { ?>
                  <a class="btn btn-primary" href="<?php echo $bannerbuttonurl ?>"><?php echo $bannerbuttontext ?></a>
                  <?php } ?>
               </div>
            </div>
         </div>
      </li>
      <li>
         <img src="<?php echo $banner3image ?>" alt="Third Slider">
         <div class="container-fluid">
            <div class="row-fluid">
               <div class="caption span4">
                  <?php if($bannerheading) {?>
                  <h1>
                     <?php echo $bannerheading ?>
                  </h1>
                  <?php } ?>
                  <?php if($bannertagline) { ?>
                  <p>
                     <?php echo $bannertagline ?>
                  </p>
                  <?php } ?>
                  <?php if($bannerbuttontext) { ?>
                  <a class="btn btn-primary" href="<?php echo $bannerbuttonurl ?>"><?php echo $bannerbuttontext ?></a>
                  <?php } ?>
               </div>
            </div>
         </div>
      </li>
   </ul>
   <?php require_once(dirname(__FILE__).'/block.php'); ?>   
</div>
<!-- End Banner -->