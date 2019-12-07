<!-- Start Block Section -->   
<div class="blocks-con">
   <input type="checkbox" id="navigation" />
   <label for="navigation" class="polllabel"></label>
   <nav class="poll">
      <h2 class="settings">All Blocks Settings</h2>
      <div class="poll-con">
         <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>    
         <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
      </div>
   </nav>
</div>
<!-- End Block Section -->