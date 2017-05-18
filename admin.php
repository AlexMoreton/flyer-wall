<?php include('header.php'); ?>

<section class="main-content">
        <div class="container">
        
        <h2>Flyer wall admin</h2>
        
        <form method="post" action="" class="flyer-form">
            <fieldset class="fieldset-auto-width">
                
                <legend>Flyer #1</legend>
                <label>Event Image</label>
                <input type="text" name="event_image" value="<?php if (isset($_POST['event_image'])) { echo $_POST['event_image']; } else { echo $eventImageFetch1['event_image']; } ?>" />
                <br />
                <p><img src="<?php if (isset($_POST['event_image'])) { echo $_POST['event_image']; } elseif (!empty($eventImageFetch1['event_image'])) { echo $eventImageFetch1['event_image']; } else { echo "http://placehold.it/100x100"; } ?>" height="300" /></p>
                <label>Event Title</label>
                <input type="text" name="event_title" value="<?php if (isset($_POST['event_title'])) { echo $_POST['event_title']; } else { echo $eventTitleFetch1['event_title']; } ?>" />
                <br />
                <label>Event Lineup</label>
                <input type="text" name="event_lineup" value="<?php if (isset($_POST['event_lineup'])) { echo $_POST['event_lineup']; } else { echo $eventLineupFetch1['event_lineup']; } ?>" />
                <br />
                <label>Event Details</label>
                <input type="text" name="event_details" value="<?php if (isset($_POST['event_details'])) { echo $_POST['event_details']; } else { echo $eventDetailsFetch1['event_details']; } ?>" />
                <br />
                <label for="">Event URL</label>
                <input type="text" name="event_url" value="<?php if (isset($_POST['event_url'])) { echo $_POST['event_url']; } else { echo $eventUrlFetch1['event_url']; } ?>" />
                <br />
                <p><input type="submit" value="Save" name="submit"/></p>
                
                <?php
                if (isset($_POST['submit'])) {
                $sql = "UPDATE test SET event_image = '$_POST[event_image]', event_title = '$_POST[event_title]', event_lineup = '$_POST[event_lineup]', event_details = '$_POST[event_details]', event_url = '$_POST[event_url]' WHERE id = 1";
 
                if (!mysql_query($sql,$con))
                    {
                    die('Error: ' . mysql_error());
                } else {
                    echo "<p><em style=\"color: green;\">Flyer #1 saved</em></p>";
                }
 
                mysql_close($con);
                }
                ?>
                
            </fieldset>
        </form>
        
        </div>
        
        <form method="post" action="">
            <fieldset class="fieldset-auto-width">
                
                <legend>Flyer #2</legend>
                <label>Event Image</label>
                <input type="text" name="event_image2" value="<?php if (isset($_POST['event_image2'])) { echo $_POST['event_image2']; } else { echo $eventImageFetch2['event_image']; } ?>" />
                <br />
                <p><img src="<?php if (isset($_POST['event_image2'])) { echo $_POST['event_image2']; } elseif (!empty($eventImageFetch2['event_image'])) { echo $eventImageFetch2['event_image']; } else { echo "http://placehold.it/100x100"; } ?>" /></p>
                <label>Event Title</label>
                <input type="text" name="event_title2" value="<?php if (isset($_POST['event_title2'])) { echo $_POST['event_title2']; } else { echo $eventTitleFetch2['event_title']; } ?>" />
                <br />
                <label>Event Lineup</label>
                <input type="text" name="event_lineup2" value="<?php if (isset($_POST['event_lineup2'])) { echo $_POST['event_lineup2']; } else { echo $eventLineupFetch2['event_lineup']; } ?>" />
                <br />
                <label>Event Details</label>
                <input type="text" name="event_details2" value="<?php if (isset($_POST['event_details2'])) { echo $_POST['event_details2']; } else { echo $eventDetailsFetch2['event_details']; } ?>" />
                <br />
                <label for="">Event URL</label>
                <input type="text" name="event_url2" value="<?php if (isset($_POST['event_url2'])) { echo $_POST['event_url2']; } else { echo $eventUrlFetch2['event_url']; } ?>" />
                <br />
                <p><input type="submit" value="Save" name="submit2"/></p>
                
                <?php
                if (isset($_POST['submit2'])) {
                $sql = "UPDATE test SET event_image = '$_POST[event_image2]', event_title = '$_POST[event_title2]', event_lineup = '$_POST[event_lineup2]', event_details = '$_POST[event_details2]', event_url = '$_POST[event_url2]' WHERE id = 2";
 
                if (!mysql_query($sql,$con))
                    {
                    die('Error: ' . mysql_error());
                } else {
                    echo "<p><em style=\"color: green;\">Flyer #1 saved</em></p>";
                }
 
                mysql_close($con);
                }
                ?>
                
            </fieldset>
        </form>
       
        <div class="flyer-link">
            <a href="page.php">View flyer wall.</a>
            <br /><br />
            <a href="flyerwall.html">View old flyer wall.</a>
        </div>
        
</section>

<?php include('footer.php'); ?>