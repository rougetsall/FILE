<?php
if (isset($_POST['suprime'])) {

    
   $supfiche=$_POST["efface"];

    unlink($supfiche) ;
   }
    if (isset($_POST['supdoc'])) {

    
   $supfiche=$_POST["efface"];

    rmdir($supfiche) ;
   }
   ?>