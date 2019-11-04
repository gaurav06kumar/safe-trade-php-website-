<?php
//if the customer click the accept estimate button 
session_start();
 
require_once('include/db_config.php');

require_once('include\estimate.php');
$data=estimate::find($db,$_GET['eid']); //find the object with 


$estimate = estimate::accept($db, $_GET['eid']); //calling the static method for accept the estimate
if(!$estimate){
    echo "<h2>Failed</h2>";
}
else {
   
   

    header("Location: c_view_estimate.php?jid=".$data->get_jid());
}



?>