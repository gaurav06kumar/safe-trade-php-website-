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



public function __construct(  $eid, $jid, $tid, $lcost ,$tcost, $mcost, $totaltcost, $edate, $isAccepted){

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
 public static function create_estimate($db, $jid, $tid, $lcost ,$tcost, $mcost, $totaltcost, $edate, $isAccepted)
 {
   $query ="INSERT INTO estimate SET  jid='$jid', tid='$tid', Labour_Cost='$lcost', Material_Cost='$mcost', Transport_Cost='$tcost', Total_Cost='$totaltcost', Expiry_Date='$edate', IsAccepted='$isAccepted' ";


     $result = $db->query($query);
      if ($result)
      {
        $eid = $db->insert_id;
        $estimate = new estimate($eid, $jid, $tid, $lcost ,$tcost, $mcost, $totaltcost, $edate, $isAccepted);
        $result = $estimate;

      }
      return $result;


 }

 public static function view_my_estimate($db,$tid)
 {  
	$query ="SELECT `eid`, `jid`, `tid`, `Labour_Cost`, `Material_Cost`, `Transport_Cost`, `Total_Cost`, `Expiry_Date`, `IsAccepted` FROM `estimate` WHERE tid ='$tid' ";
	 $result = $db->query($query) or die($db->error);
 

		 ?>
		 <table class = "table table-hover">
		 <thead>
		 <tr>

		 
		 <th>JID</th>
		 
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
				 ?>
				 
 
				 <div class="container-fluid">

						 <tr>

					 
						 <td><?= $res['jid']; ?> </td>
					 
						 <td><?= $res['Labour_Cost']; ?> </td>
						 <td><?= $res['Material_Cost']; ?> </td>
						 <td><?= $res['Transport_Cost']; ?> </td>
					 
						 <td><?= $res['Total_Cost']; ?> </td>
				 
						 <td><?= $res['Expiry_Date']; ?> </td>

						 </tr>
				 </div>

		 <?php
			 }

		 }?>
		 </tbody>
		 </table>
		 <?php
 }



 


 public static function find($db, $id){
   // search students table and locate record with id
   // get that record and create student object
   // return student object OR false if we cannot find it
   $result = false;
   $query = "SELECT * FROM job WHERE jid = $id";
     $result = $db->query($query) or die($db->error);
   if ($result){
     if ($result->num_rows == 1){
       $user_data = $result->fetch_assoc();

         $user = new Job($user_data['job_name'],$user_data['location'],$user_data['Discription'],$user_data['Expected_Cost'],$user_data['Start_Date'],$user_data['End_Date'],$user_data['uid'],$user_data['jid']);

       $result = $user;
     }
   }
   return $result;
 }




 // ------- getter methods ----------
 public function getJObName(){
   return $this->jobname;
 }

 public function getLoc(){
   return $this->loc;
 }

 public function getDescrip(){
   return $this->descrip;
 }

 public function getEcost(){
   return $this->estcost;
 }

 public function getSdate(){
   return $this->sdate;
 }
 public function getEdate(){
   return $this->edate;
 }
 public function getCid(){
   return $this->cid;
 }
 public function getJid(){
   return $this->jid;
 }



}

?>
