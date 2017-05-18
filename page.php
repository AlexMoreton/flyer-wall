<?php include('header.php'); ?>

<section class="main-content">
    
    <div class="container">
        
    <div class="intro-text">
        
        In response to the council crackdown on postering, Nitelife Flyer Wall gives independent promoters in Bristol a space to showcase their events. Get involved by emailing flyerwall@nitelifeonline.com.
   
    </div>

    <?php
    
    // Display each flyer, and flyer details
    // if field is empty display default image
    // Image sizing
    foreach($flyers as $flyer) {
        echo '<a href="' . ${$eventVariables[9] . $flyer}['event_url'] . '"><img src="' . ${$eventVariables[1] . $flyer}['event_image'] . '" height="300" /></a> <br />';
        echo '<p><h2 class="flyer-title">' . ${$eventVariables[3] . $flyer}['event_title'] . '</h2></p>';
        echo '<p><span class="flyer-lineup">' . ${$eventVariables[5] . $flyer}['event_lineup'] . '</span></p>';
        echo '<p><span class="flyer-details">' . ${$eventVariables[7] . $flyer}['event_details'] . '</span></p>';
    }
    
    ?>
    
    </div>
    
</section>

<?php include('footer.php'); ?>