
<?php 
session_start();
include_once 'include/job.php';
require_once('include/db_config.php');

$delete=JOb :: delete($db,$_GET['jid']);
 
if(!$delete){
    echo "<h2>Failed to update</h2>";
}
 else {
    
   header("Location: My_Jobs.php?tid=".$_SESSION['TID']);//redirecting to user profile
    
}

 
?>
