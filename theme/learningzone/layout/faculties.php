<!-- Start Faculties Section -->
<?php  if ($display_faculties) { ?>
<div class="faculties">
   <div class="container-fluid">
      <?php if($facultyheading) { ?>
      <h1><?php echo $facultyheading ?></h1>
      <?php } ?>
      <?php if($facultytagline) { ?>
      <p><?php echo $facultytagline ?></p>
      <?php } ?>
      <div class="row-fluid">
         <div class="span3">
            <div class="view view-first">
               <?php if($faculty1image) {?>
               <a href="<?php echo $faculty1url ?>"><img src="<?php echo $faculty1image ?>" alt="" /></a>
               <?php }?>
               <?php if($faculty1profile) {?>
               <div class="mask">
                  <p class="profile">
                     <?php echo $faculty1profile ?>
                  </p>
               </div>
               <?php }?>
            </div>
            <?php if($faculty1name) {?>
            <p class="name">
               <a href="<?php echo $faculty1url ?>">
               <?php echo $faculty1name ?>
               </a>
            </p>
            <?php }?>
         </div>
         <div class="span3">
            <div class="view view-first">
               <?php if($faculty2image) {?>
               <a href="<?php echo $faculty2url ?>"><img src="<?php echo $faculty2image ?>" alt="" /></a>
               <?php }?>
               <?php if($faculty2profile) {?>
               <div class="mask">
                  <p class="profile">
                     <?php echo $faculty2profile ?>
                  </p>
               </div>
               <?php }?>
            </div>
            <?php if($faculty2name) {?>
            <p class="name">
               <a href="<?php echo $faculty2url ?>">
               <?php echo $faculty2name ?>
               </a>
            </p>
            <?php }?>
         </div>
         <div class="span3">
            <div class="view view-first">
               <?php if($faculty3image) {?>
               <a href="<?php echo $faculty3url ?>"><img src="<?php echo $faculty3image ?>" alt="" /></a>
               <?php }?>
               <?php if($faculty3profile) {?>
               <div class="mask">
                  <p class="profile">
                     <?php echo $faculty3profile ?>
                  </p>
               </div>
               <?php }?>
            </div>
            <?php if($faculty3name) {?>
            <p class="name">
               <a href="<?php echo $faculty3url ?>">
               <?php echo $faculty3name ?>
               </a>
            </p>
            <?php }?>
         </div>
         <div class="span3">
            <div class="view view-first">
               <?php if($faculty4image) {?>
               <a href="<?php echo $faculty4url ?>"><img src="<?php echo $faculty4image ?>" alt="" /></a>
               <?php }?>
               <?php if($faculty4profile) {?>
               <div class="mask">
                  <p class="profile">
                     <?php echo $faculty4profile ?>
                  </p>
               </div>
               <?php }?>
            </div>
            <?php if($faculty4name) {?>
            <p class="name">
               <a href="<?php echo $faculty4url ?>">
               <?php echo $faculty4name ?>
               </a>
            </p>
            <?php }?>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Faculties Section -->