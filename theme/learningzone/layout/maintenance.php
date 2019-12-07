<?php 
   require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/internal-banner.php'); ?>
   <!-- Start Page Content -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <section id="region-main" class="span12">
            <?php echo $OUTPUT->main_content(); ?>
         </section>
      </div>
   </div>
   <!-- End Page Content -->
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>