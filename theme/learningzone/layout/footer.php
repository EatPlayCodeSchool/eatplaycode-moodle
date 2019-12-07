<?php echo $OUTPUT->standard_after_main_region_html() ?>
<!-- Start Top Footer -->
<div class="top-footer">
   <div class="container-fluid">
      <ul class="social">
         <?php if ($hasfacebook) { ?>
         <li>
            <a href="<?php echo $hasfacebook; ?>" target="_blank" >
            <i class="facebook">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/facebook.jpg" alt="Facebook"/>
            </i>
            </a>
         </li>
         <?php } ?>
         <?php if ($hastwitter) { ?>
         <li>
            <a href="<?php echo $hastwitter; ?>" target="_blank" >
            <i class="twitter">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/twitter.jpg" alt="twitter"/>
            </i>
            </a>
         </li>
         <?php } ?>
         <?php if ($hasgooglepluse) { ?>
         <li>
            <a href="<?php echo $hasgooglepluse; ?>" target="_blank" >
            <i class="googlepluse">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/googlepluse.jpg" alt="googlepluse"/>
            </i>
            </a>
         </li>
         <?php } ?>
         <?php if ($haspinterest) { ?>
         <li>
            <a href="<?php echo $haspinterest; ?>" target="_blank" >
            <i class="pinterest">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/pinterest.jpg" alt="pinterest"/>
            </i>
            </a>
         </li>
         <?php } ?>
         <?php if ($hasvimeo) { ?>
         <li>
            <a href="<?php echo $hasvimeo; ?>" target="_blank" >
            <i class="vimeo">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/vimeo.jpg" alt="vimeo"/>
            </i>
            </a>
         </li>
         <?php } ?>
         <?php if ($hasgit) { ?>
         <li>
            <a href="<?php echo $hasgit; ?>" target="_blank" >
            <i class="git">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/git.jpg" alt="git"/>
            </i>
            </a>
         </li>
         <?php } ?>
         <?php if ($hasyahoo) { ?>
         <li>
            <a href="<?php echo $hasyahoo; ?>" target="_blank" >
            <i class="yahoo">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/yahoo.jpg" alt="yahoo"/>
            </i>
            </a>
         </li>
         <?php } ?>
         <?php if ($haslinkdin) { ?>
         <li>
            <a href="<?php echo $haslinkdin; ?>" target="_blank" >
            <i class="linkdin">
            <img src="<?php echo $CFG->wwwroot;?>/theme/learningzone/pix/social/linkdin.jpg" alt="linkdin"/>
            </i>
            </a>
         </li>
         <?php } ?>
      </ul>
   </div>
</div>
<!-- End Top Footer -->
<!-- Start Footer section -->
<?php  if ($display_footer) { ?>
<footer id="page-footer">
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="span3">
            <?php if($footersection1heading) { ?>
            <h5><?php echo $footersection1heading ?></h5>
            <?php } ?>
            <ul>
               <?php if($footersection1content) { ?>
               <li><?php echo $footersection1content ?></li>
               <?php } ?>
               <?php if($footersection1email) { ?>
               <li><a href="mailto:<?php echo $footersection1email ?>"><?php echo $footersection1email ?></a></li>
               <?php } ?>
               <?php if($footersection1contactno) { ?>
               <li><?php echo $footersection1contactno ?></li>
               <?php } ?>
               <?php if($footersection1address) { ?>
               <li><?php echo $footersection1address ?></li>
               <?php } ?>
            </ul>
         </div>
         <div class="span3">
            <?php if($footersection2heading) { ?>
            <h5><?php echo $footersection2heading ?></h5>
            <?php } ?>
            <ul class="common">
               <?php if($footersection2link1) { ?>
               <li><a href="<?php echo $footersection2link1url ?>"><?php echo $footersection2link1 ?></a></li>
               <?php } ?>
               <?php if($footersection2link2) { ?>
               <li><a href="<?php echo $footersection2link2url ?>"><?php echo $footersection2link2 ?></a></li>
               <?php } ?>
               <?php if($footersection2link3) { ?>
               <li><a href="<?php echo $footersection2link3url ?>"><?php echo $footersection2link3 ?></a></li>
               <?php } ?>
               <?php if($footersection2link4) { ?>
               <li><a href="<?php echo $footersection2link4url ?>"><?php echo $footersection2link4 ?></a></li>
               <?php } ?>
               <?php if($footersection2link5) { ?>
               <li><a href="<?php echo $footersection2link5url ?>"><?php echo $footersection2link5 ?></a></li>
               <?php } ?>
            </ul>
         </div>
         <div class="span3">
            <?php if($footersection3heading) { ?>
            <h5><?php echo $footersection3heading ?></h5>
            <?php } ?>
            <ul class="common">
               <?php if($footersection3link1) { ?>
               <li><a href="<?php echo $footersection3link1url ?>"><?php echo $footersection3link1 ?></a></li>
               <?php } ?>
               <?php if($footersection3link2) { ?>
               <li><a href="<?php echo $footersection3link2url ?>"><?php echo $footersection3link2 ?></a></li>
               <?php } ?>
               <?php if($footersection3link3) { ?>
               <li><a href="<?php echo $footersection3link3url ?>"><?php echo $footersection3link3 ?></a></li>
               <?php } ?>
               <?php if($footersection3link4) { ?>
               <li><a href="<?php echo $footersection3link4url ?>"><?php echo $footersection3link4 ?></a></li>
               <?php } ?>
               <?php if($footersection3link5) { ?>
               <li><a href="<?php echo $footersection3link5url ?>"><?php echo $footersection3link5 ?></a></li>
               <?php } ?>
            </ul>
         </div>
         <div class="span3">
            <?php if($footersection4heading) { ?>
            <h5><?php echo $footersection4heading ?></h5>
            <?php } ?>   
            <ul class="instagram-pics">
               <li><a href="#"><img src="<?php echo $instagram1image ?>" alt="instagram-1-image" /></a></li>
               <li><a href="#"><img src="<?php echo $instagram2image ?>" alt="instagram-2-image" /></a></li>
               <li><a href="#"><img src="<?php echo $instagram3image ?>" alt="instagram-3-image" /></a></li>
               <li><a href="#"><img src="<?php echo $instagram4image ?>" alt="instagram-4-image" /></a></li>
               <li><a href="#"><img src="<?php echo $instagram5image ?>" alt="instagram-5-image" /></a></li>
               <li><a href="#"><img src="<?php echo $instagram6image ?>" alt="instagram-6-image" /></a></li>
            </ul>
            <?php if($followus) { ?>
            <span class="followus"><a href="<?php echo $followusurl ?>"><?php echo $followus ?></a></span>
            <?php } ?>
         </div>
      </div>
      <div class="clearfix"></div>
      <ul class="copyright">
         <?php if($hascopyright) {?>        
         <li>
            <?php if ($hascopyright) {
               echo '<p class="copy">Copyright &copy; '.date("Y").' '.$hascopyright.'</p>'; 
               } ?>
         </li>
         <?php }else{?>
         <?php } ?> 
      </ul>
   </div>
</footer>
<?php } ?>
<!-- End Footer section -->
<!-- Start Bottom Footer section -->
<div class="bottom-footer">
   <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
   <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
   <?php
      echo $html->footnote;
      echo $OUTPUT->login_info();
      //echo $OUTPUT->home_link();
      echo $OUTPUT->standard_footer_html();
      ?> 
</div>
<!-- End Bottom Footer section -->
<?php echo $OUTPUT->standard_end_of_body_html(); ?>
<!-- Start Back To Top -->    
<?php
   // Code for back to top.
   if (!empty($PAGE->theme->settings->backtotop)) {
   ?>
<div id="backtotop" style="display: none;"> 
   <a class="scrollup" href="javascript:void(0);" title="<?php echo get_string('backtotop', 'theme_learningzone')?>">
   </a>
</div>
<?php 
   }
   ?>
<!-- End Back To Top -->
<script type="text/javascript">
   $(".visitlink a > span").addClass("all");
   
   var elements = document.getElementsByClassName('all');
   for (var i = 0; i < elements.length; i++) {
       if (elements[i].innerHTML == 'Course') {
           elements[i].innerHTML = "Enter";
   
   
       }
   }
   
</script>
</div>
</body>
</html>