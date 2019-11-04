<!-- this page is call when tradesman click on delete estimate  button  -->
<?php 
session_start();
include_once 'include/estimate.php';
require_once('include/db_config.php');

$delete=estimate :: delete($db,$_GET['eid']);
 
if(!$delete){
    echo "<h2>Failed to update</h2>";
}
 else {
    
    header("Location: My_Estimate.php?tid=".$_SESSION['TID']);//redirecting to user profile
    
}

 
?>