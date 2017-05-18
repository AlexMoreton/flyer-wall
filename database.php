<?php
  
    $con = mysql_connect(getenv('IP'), getenv('C9_USER'),"", "c9");

    if (!$con)
        {
        die('Could not connect: ' . mysql_error());
    }
 
    mysql_select_db("c9", $con);
        
?>