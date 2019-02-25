
<?php

function list_dir($name) {
	 $tab = array();
  
  $d = dir($name);

  if ($dir = opendir($name)) {
    while (false !== ($entry = $d->read())) {
       if (is_dir($name.'/'.$entry)) {
        array_push($tab,$entry);
       }
         
      }
      }
    
  return $tab;

}
function list_file($name) {
   $tab = array();
  
  $d = dir($name);

  if ($dir = opendir($name)) {
    while (false !== ($entry = $d->read())) {
       if (is_file($name.'/'.$entry)) {
        array_push($tab,$entry);
       }
         
      }
      }
  
 
 
  return $tab;
}
?>