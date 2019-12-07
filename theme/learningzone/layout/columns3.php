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
   <?php require_once(dirname(__FILE__).'/block.php'); ?>
   <?php require_once(dirname(__FILE__).'/internal-banner.php'); ?>
   <?php require_once(dirname(__FILE__).'/breadcrumb.php'); ?>
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
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>