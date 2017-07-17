<?php
    $con=mysql_connect("localhost","root","");   
      if(!$con)
    {                                                                                      
        die('Could not connect'.mysql_error()); 
    } 
    else{
        echo "<pre>Database Connected</pre>";
    }
   
     $databasename="sbakery";
     $db_selected=mysql_select_db($databasename,$con);
     
     if(!$db_selected)
     {
         die("Can't use $databasename".mysql_error());
     }
     
?>
