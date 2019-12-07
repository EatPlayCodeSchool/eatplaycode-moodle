<?php 
   // Set default (LTR) layout mark-up for a three column page.
   $regionmainbox = 'span12';
   $regionmain = 'span9';
   $sidepre = '';
   $sidepost = '';
   // Reset layout mark-up for RTL languages.
   if (right_to_left()) {
       $regionmainbox = 'span12';
       $regionmain = 'span9';
       $sidepre = '';
       $sidepost = '';
   }
   
   require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/block.php'); ?>
   <?php
      // Get Course Image and Display.
      global $COURSE;
      if ($COURSE->id > 0) {
          global $CFG;
          if (empty($COURSE->visible)) {
              $attributes['class'] = 'dimmed';
          }
          if ($COURSE instanceof stdClass) {
              //require_once($CFG->libdir . '/coursecatlib.php');
              $COURSE = new core_course_list_element($COURSE);
          }
      
      }
      ?>
   <?php require_once(dirname(__FILE__).'/internal-banner.php'); ?>     
   <?php require_once(dirname(__FILE__).'/breadcrumb.php'); ?>
   <!-- Start Page Content -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
               <aside class="span3 desktop-first-column">
                  <?php if ($COURSE->has_course_contacts()){ ?>
                  <div class="teacherlist">
                     <h3 class="headingtag">Teachers For This Course</h3>
                     <?php   echo $content = html_writer::start_tag('ul', array('class' => 'teachers'));
                        foreach ($COURSE->get_course_contacts() as $userid => $coursecontact) {
                        global $DB, $OUTPUT;
                        $user = $DB->get_record('user', array('id'=> $userid));
                        $face = $OUTPUT->user_picture($user, array('size'=>50) );
                        $name = '<div class = "face pull-left">'.$face. '</div>'. ' ' .
                        html_writer::start_tag('div', array('class' => 'username')).
                               html_writer::link(new moodle_url('/user/view.php', array('id' => $userid, 'course' => SITEID)), $coursecontact['username']).'</br>'.'<span class="email">'.$user->email.'</span>'.
                        html_writer::end_tag('div');
                        
                        echo $content = html_writer::tag('li', '<div class = "teacher-container clearfix">'.$name.'</div>');
                        
                        
                        }
                        echo $content = html_writer::end_tag('ul'); // .teachers
                        ?>
                  </div>
                  <?php } ?>
                  <?php  $courserenderer = $PAGE->get_renderer('core', 'course');
                     if(!empty($courserenderer->frontpage_my_courses())) { ?>
                  <h3 class="headingtag">My Courses</h3>
                  <div class="allcourses" style="margin-bottom:20px;">
                     <?php
                        echo $courserenderer->frontpage_my_courses(); ?>
                  </div>
                   <?php } ?>
               </aside>
               <?php if(!empty($courserenderer->frontpage_my_courses()) || ($COURSE->has_course_contacts())) { ?>
               <section id="region-main" class="<?php echo $regionmain; ?>">
                  <?php
                     echo $OUTPUT->course_content_header();
                     echo $OUTPUT->main_content();
                     echo $OUTPUT->course_content_footer();
                     ?>
               </section>
               <?php } else { ?>
               <section id="region-main" class="<?php echo $regionmainbox; ?>" style="margin-left:0;">
                  <?php
                     echo $OUTPUT->course_content_header();
                     echo $OUTPUT->main_content();
                     echo $OUTPUT->course_content_footer();
                     ?>
               </section>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
   <!-- Start Page Content -->
   <script type="text/javascript">
      var activeurl = window.location;
      $('.panel-heading a[href="' + activeurl + '"]').addClass('active');
   </script>
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>