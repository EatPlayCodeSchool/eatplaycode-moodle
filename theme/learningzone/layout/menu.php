<!-- Start Top Header Section -->            
<div class="top-header navbar-fixed-top">
   <div class="container-fluid">
      <div class="pull-left logocon">
         <a class="logo" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $logourl?>"/></a>
      </div>
      <div class="pull-right navigation-con">
         <header role="banner" class="navbar <?php echo $html->navbarclass ?>">
            <nav role="navigation" class="navbar-inner">
               <div class="container-fluid">
                  <?php echo $OUTPUT->navbar_home(); ?>
                  <?php echo $OUTPUT->navbar_button(); ?>
                  <?php //echo $OUTPUT->user_menu(); ?>
                  <div class="loginsection pull-right">
                     <?php if(isloggedin()){
                        if(isguestuser()){
                        ?>
                     <span class="common">This is guest access</span>                                 
                     <i class="fa fa-sign-in" aria-hidden="true"></i> <a class="login common" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
                     <?php echo get_string('login') ?>
                     </a>	
                     <?php
                        }else{
                        ?>
                     <?php echo $OUTPUT->user_menu(); ?>	
                     <?php
                        }
                        }else{ ?>	
                     <?php
                        if(!empty($CFG->registerauth)){
                        	 $authplugin = get_auth_plugin($CFG->registerauth);
                        	 if($authplugin->can_signup()){
                        		
                        		?>
                     <i class="fa fa-user" aria-hidden="true"></i> <a class="signup common" href="<?php echo $CFG->wwwroot.'/login/signup.php' ?>">Register</a>
                     <?php
                        }
                        }
                        ?>
                     <i class="fa fa-sign-in" aria-hidden="true"></i> <a class="login common" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
                     <?php echo get_string('login') ?>
                     </a>
                     <?php
                        }
                        ?>
                  </div>
                  <!-- end div .loginsection -->
                  <div class="nav-collapse collapse">
                     <?php echo $OUTPUT->custom_menu(); ?>
                     <ul class="nav pull-right">
                        <li>
                           <?php echo $OUTPUT->page_heading_menu(); ?>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<!-- End Top Header Section -->
<!-- Start Bottom Header Section -->
<div class="bottom-header navbar-fixed-top">
   <div class="container-fluid">
      <div class="pull-left">
         <?php if(isloggedin()) { ?>           
         <div class="mycourse"> 
            <a href="<?php echo $CFG->wwwroot;?>/my">     
            <?php echo 'Your Total Courses';
               $courses = enrol_get_my_courses(); ?>
            <span class="circle">
            <?php echo $totalcount = count($courses); ?>
            </span>
            </a>    
         </div>
         <?php } ?>    
      </div>
      <div class="pull-right">    
         <a class="cal" href="<?php echo $CFG->wwwroot;?>/course/"><i class="fa fa-folder-open-o"></i> Courses</a>
         <a class="cal" href="<?php echo $CFG->wwwroot;?>/calendar/view.php"><i class="fa fa-calendar"></i> Calendar</a>
          <?php echo $OUTPUT->search_box(); ?>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<!-- End Bottom Header Section -->