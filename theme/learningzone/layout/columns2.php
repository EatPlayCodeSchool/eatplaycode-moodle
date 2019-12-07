<?php
   // Set default (LTR) layout mark-up for a two column page (side-pre-only).
   $regionmain = '';
   $sidepre = '';
   // Reset layout mark-up for RTL languages.
   if (right_to_left()) {
       $regionmain = '';
       $sidepre = '';
   }
   require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/block2.php'); ?>
   <?php require_once(dirname(__FILE__).'/internal-banner.php'); ?>
   <?php require_once(dirname(__FILE__).'/breadcrumb.php'); ?>
   <!-- Start Page Content -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <section id="region-main" class="<?php echo $regionmain; ?>">
            <?php
               echo $OUTPUT->course_content_header();
               echo $OUTPUT->main_content();
               echo $OUTPUT->course_content_footer();
               ?>
         </section>
      </div>
   </div>
   <!-- End Page Content -->
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>