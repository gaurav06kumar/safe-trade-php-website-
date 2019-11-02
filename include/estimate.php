<?php
 require_once("db_config.php");
class estimate {



 private $eid=null;
 private $jid=null;
 private $tid=null;
 private $lcost="";
 private $tcost="";
 private $mtcost="";
 private $Total_cost="";
 private $edate="";
 private $isAccepted="";
 private $jobName="";



public function __construct(  $eid, $jid, $tid, $lcost ,$tcost, $mcost, $totaltcost, $edate, $isAccepted,$job){

  $this->eid = $eid;
  $this->jid = $jid;
  $this->tid = $tid;
  $this->lcost = $lcost;
  $this->tcost = $tcost;
  $this->mtcost = $mcost;
  $this->Total_cost = $totaltcost;
  $this->edate = $edate;

  $this->isAccepted = $isAccepted;
}
 public static function create_estimate($db, $jid, $tid, $lcost ,$tcost, $mcost, $totaltcost, $edate, $isAccepted,$job)
 {
   $query ="INSERT INTO estimate SET  jid='$jid', tid='$tid', Labour_Cost='$lcost', Material_Cost='$mcost', Transport_Cost='$tcost', Total_Cost='$totaltcost', Expiry_Date='$edate', IsAccepted='$isAccepted',job_name='$job' ";


     $result = $db->query($query);
      if ($result)
      {
        $eid = $db->insert_id;
        $estimate = new estimate($eid, $jid, $tid, $lcost ,$tcost, $mcost, $totaltcost, $edate, $isAccepted,$job);
        $result = $estimate;

      }
      return $result;


 }

 public static function view_my_estimate($db,$tid)
 {  
	$query ="SELECT `eid`, `jid`, `tid`,job_name, `Labour_Cost`, `Material_Cost`, `Transport_Cost`, `Total_Cost`, `Expiry_Date`, `IsAccepted` FROM `estimate` WHERE tid ='$tid' ";
	 $result = $db->query($query) or die($db->error);
 

		 ?>
		 <table class = "table table-hover">
		 <thead>
		 <tr>

		 
		 <th>JID</th>
		 <th>Job Name</th>
		 <th>Labour Cost</th>
		 <th>Material Cost</th>
		 <th>Transport Cost</th>
		 <th>Total Cost</th>
		  <th> Expire Date</th>


		 </tr>
		 </thead>
		 <tbody>
		 <?php
 

		 while($res = $result->fetch_assoc())
		 {


       if($res==0)
       {
         return "Sorry No Records Found..";
       }
			 if($res!=0)
			 {
				   if($res['IsAccepted']==1)
				   {
					?>
				 
 
					<div class="container-fluid"  >
   
							<tr bgcolor="#D2F67C">
						
						
							<td><?= $res['jid']; ?> </td>
						    <td><?= $res['job_name']; ?> </td>
							<td><?= $res['Labour_Cost']; ?> </td>
							<td><?= $res['Material_Cost']; ?> </td>
							<td><?= $res['Transport_Cost']; ?> </td>
						
							<td><?= $res['Total_Cost']; ?> </td>
					
							<td><?= $res['Expiry_Date']; ?> </td>
							<td><a href="delestimate.php?eid=<?php echo $res['eid']; ?>" class="btn btn-info">Delete</a></td>
                        	 
   
							</tr>
					</div>
					
   
			<?php
				   }
				   else
				   {
					?>
				 
 
					<div class="container-fluid"  >
   
							<tr>
   
						
							<td><?= $res['jid']; ?> </td>
							<td><?= $res['job_name']; ?> </td>
							<td><?= $res['Labour_Cost']; ?> </td>
							<td><?= $res['Material_Cost']; ?> </td>
							<td><?= $res['Transport_Cost']; ?> </td>
						
							<td><?= $res['Total_Cost']; ?> </td>
					
							<td><?= $res['Expiry_Date']; ?> </td>
							<td><a href="delestimate.php?eid=<?php echo $res['eid']; ?>" class="btn btn-info">Delete</a></td>
							 
   
							</tr>
					</div>
   
			<?php
				   }
				
			 }

		 }?>
		 </tbody>
		 </table>
		 <?php
 }



 





 public static function view_c_estimate($db,$jid)
 {  
	$query ="SELECT * FROM `estimate` WHERE jid ='$jid' ";
	 $result = $db->query($query) or die($db->error);
 

		 ?>
		 <table class = "table table-hover">
		 <thead>
		 <tr>

		 
	 
		 <th>Job Name </th>
		 <th>Labour Cost</th>
		 <th>Material Cost</th>
		 <th>Transport Cost</th>
		 <th>Total Cost</th>
		  <th> Expire Date</th>


		 </tr>
		 </thead>
		 <tbody>
		 <?php
 

		 while($res = $result->fetch_assoc())
		 {


       
			 if($res!=0)
			 {
				 ?>
				 
 
				 <div class="container-fluid">

						 <tr>

					 
						  
						 <td><?= $res['job_name']; ?> </td>
						 <td><?= $res['Labour_Cost']; ?> </td>
						 <td><?= $res['Material_Cost']; ?> </td>
						 <td><?= $res['Transport_Cost']; ?> </td>
					 
						 <td><?= $res['Total_Cost']; ?> </td>
				 
						 <td><?= $res['Expiry_Date']; ?> </td>
						 <td><a href="accept_estimate.php?eid=<?php echo $res['eid']; ?>" class="btn btn-info">Accept</a></td>

						 </tr>
				 </div>

		 <?php
       }
       else
       {
         return "Sorry No Records Found..";
       }

		 }?>
		 </tbody>
		 </table>
		 <?php
 }




 public static function find($db, $eid){
	// search students table and locate record with id
	// get that record and create student object
	// return student object OR false if we cannot find it
	$result = false;
	$query = "SELECT * FROM estimate  WHERE eid = $eid";
	  $result = $db->query($query) or die($db->error);
	if ($result){
	  if ($result->num_rows == 1){
		$user_data = $result->fetch_assoc();

	  
		  $user = new estimate($user_data['eid'],$user_data['jid'],$user_data['tid'],$user_data['Labour_Cost'],$user_data['Transport_Cost'],$user_data['Material_Cost'],$user_data['Total_Cost'],$user_data['Expiry_Date'],$user_data['IsAccepted'],$user_data['job_name']);
 
		$result = $user;
	  }
	}


 


	return $result;
  }
 

 

 public static function delete($db,$eid){
  //delete estimate record in estimatedetails table and if successful 
  // return true otherwise return false;



  $query ="SELECT * FROM `estimate` WHERE eid ='$eid' ";

  $result = $db->query($query) or die($db->error);

  if ($result){
    if ($result->num_rows == 1){
      $row = $result->fetch_assoc();
      $_SESSION['TID']=$row['tid'];
    }
  }
  $result = false;  //   $query ="DELETE FROM `estimate` WHERE eid = '$id'" ;
  $query ="DELETE FROM `estimate` WHERE eid = '$eid'" ;
  $result = $db->query($query) or die($db->error);
 

  if ($result){
   
    $result = true;
  }
  return $result;
}


public static function accept($db,$eid){
    // update estimate record in estimatedetails table and if user accepts the estimate 
    // create a estimate object and return it otherwise return false;
    $result = false;
    // $tcost=$lcost+$mcost;
	$isaccepted=1;
	

	$query ="SELECT * FROM `estimate` WHERE eid ='$eid' ";

	$result = $db->query($query) or die($db->error);
  
	if ($result){
	  if ($result->num_rows == 1){
	
		//"UPDATE `estimate` SET `IsAccepted`=1 WHERE eid ='$eid'";
	  }
	}

	$query ="UPDATE `estimate` SET `IsAccepted`='$isaccepted' WHERE eid ='$eid'";
	$result = $db->query($query) or die($db->error);
   
  
	if ($result){
	 
	  $result = true;
	}
	return $result;


  }




 
 

 // ------- getter methods ----------
 public function get_eid(){
	return $this->eid;
  }
 
  public function get_jid(){
	return $this->jid;
  }
 
  public function get_tid(){
	return $this->tid;
  }
 
  public function get_lcost(){
	return $this->lcost;
  }
 
  public function get_tcost(){
	return $this->tcost;
  }
  public function getEdate(){
	return $this->edate;
  }
  public function get_total(){
	return $this->Total_cost;
  }
  public function get_isAccepted(){
	return $this->isAccepted;
  }
  public function get_jobName(){
	return $this->jobName;
  }
 
 

}

?>
