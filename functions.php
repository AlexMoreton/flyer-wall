<?php

// Array of flyers
$flyers = array(1, 2);

// Array of variables needed for extracting from db
$eventVariables = array("eventImage", "eventImageFetch", "eventTitle", "eventTitleFetch", "eventLineup", "eventLineupFetch", "eventDetails", "eventDetailsFetch", "eventUrl", "eventUrlFetch");
  
// Add extra flyer to array      
function addFlyer() {
    global $flyers;
    $nextFlyer = count($flyers) + 1;
    array_push($flyers, $nextFlyer);
    }

// Create variables for each flyer - $eventImageFetch1, $eventImageFetch2, etc
foreach($flyers as $flyer) {
    global $eventVariables;
    
    // Select event image from db
    ${$eventVariables[0] . $flyer} = mysql_query("SELECT event_image FROM test WHERE id = '$flyer'");
    ${$eventVariables[1] . $flyer} = mysql_fetch_array(${$eventVariables[0] . $flyer});
    
    // Select event title from db
    ${$eventVariables[2] . $flyer} = mysql_query("SELECT event_title FROM test WHERE id = '$flyer'");
    ${$eventVariables[3] . $flyer} = mysql_fetch_array(${$eventVariables[2] . $flyer});
    
    // Select event lineup from db;
    ${$eventVariables[4] . $flyer} = mysql_query("SELECT event_lineup FROM test WHERE id = '$flyer'");
    ${$eventVariables[5] . $flyer} = mysql_fetch_array( ${$eventVariables[4] . $flyer});
    
    // Select event details from db
    ${$eventVariables[6] . $flyer} = mysql_query("SELECT event_details FROM test WHERE id = '$flyer'");
    ${$eventVariables[7] . $flyer} = mysql_fetch_array(${$eventVariables[6] . $flyer});
    
    // Select event URL from db
    ${$eventVariables[8] . $flyer} = mysql_query("SELECT event_url FROM test WHERE id = '$flyer'");
    ${$eventVariables[9] . $flyer} = mysql_fetch_array(${$eventVariables[8] . $flyer});
    }

?>