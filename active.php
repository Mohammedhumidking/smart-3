<?php
require_once('api.php');
$API = new RouterosAPI();

if ($API->connect("5.5.5.1", "admin", "02010018772")) {
   
    
    $actie = $API->comm('/ip/hotspot/active/print');
	// echo "<pre>";
	// print_r($actie);
	// echo "</pre>";
   
    $n = 0;
    while ($n < count($actie)) {
    // echo $actie[$n]['user'] . "<br>"; 

    $data[] = $actie[$n] ;
    $n++;
   }
   echo "<pre>";
   print_r(json_encode($data));
   echo "</pre><br>";
  
}

?>
