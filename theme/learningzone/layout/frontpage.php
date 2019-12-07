<?php 
   // Set default (LTR) layout mark-up for a three column page.
   $regionmainbox = 'span12';
   $regionmain = '';
   $sidepre = '';
   $sidepost = '';
   // Reset layout mark-up for RTL languages.
   if (right_to_left()) {
       $regionmainbox = 'span12';
       $regionmain = '';
       $sidepre = '';
       $sidepost = '';
   }
   require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/banner.php'); ?>
   <?php require_once(dirname(__FILE__).'/numbers.php'); ?>
   <!-- Start Site News -->
   <div id="news">
      <div class="container-fluid">
      </div>
   </div>
   <!-- End Site News -->
   <!-- Start Available Courses-->      
   <div id="courses-block">
      <div class="header">
          <div class="container-fluid">
         <?php if($courseheading) { ?>
         <h2 class="courses-block-heading"><?php echo $courseheading ?></h2>
         <?php } ?>
         <?php if($coursetagline) { ?>
         <p class="tagline"><?php echo $coursetagline ?></p>
         <?php } ?>
          </div>
      </div>
      <div class="container-fluid">
      </div>
   </div>
   <!-- End Available Courses -->  
   <!-- Start My Courses -->
   <div id="my-courses-block">
       <div class="header">
       <div class="container-fluid">
           <?php if($yourcourseheading) { ?>
           <h2 class="my-courses-block-heading"><?php echo $yourcourseheading ?></h2>
           <?php } ?>
           <?php if($yourcoursetagline) { ?>
           <p class="tagline"><?php echo $yourcoursetagline ?></p>
           <?php } ?>
           </div>
       </div>
      <div class="container-fluid">
      </div>
   </div>
   <!-- End My Courses --> 
   <!-- Start Page Content -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
               <section id="region-main" class="<?php echo $regionmain; ?>">
                  <?php
                     echo $OUTPUT->course_content_header();
                     echo $OUTPUT->main_content();
                     echo $OUTPUT->course_content_footer();
                     ?>
               </section>
            </div>
         </div>
      </div>
   </div>
   <!-- End Page Content -->
   <?php require_once(dirname(__FILE__).'/getthecoaching.php'); ?>
   <?php require_once(dirname(__FILE__).'/faculties.php'); ?>
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>