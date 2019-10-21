<?php
 require_once("db_config.php");
class Job {

 protected $db;
 public function __construct(){
	 $this->db = new DB_con();
	 $this->db = $this->db->ret_obj();
 }



 public function createjob($jname ,$loc, $descrip, $estcost, $sdate, $edate,$uid)
 {

	 $query ="INSERT INTO job SET job_name='$jname', location='$loc', Discription='$descrip', Expected_Cost='$estcost' ,Start_Date='$sdate'  ,End_Date='$edate',uid='$uid'";


	 $result = $this->db->query($query) or die($this->db->error);
		if ($result)
		{
			 return true;
		}
		 else{return false;}
 }

 public function view_my_job($uid)
 {
	 $query = "SELECT  `job_name`, `location`, `Discription`, `Expected_Cost`, `Start_Date`, `End_Date` FROM `job` WHERE uid='$uid'";
	 //$query = "SELECT * FROM job";
	 $result = $this->db->query($query) or die($this->db->error);
	//$result->execute();

		 ?>
		 <table class = "table table-hover">
		 <thead>
		 <tr>

		 <th>Job Name</th>
		 <th>Location</th>
		 <th>Description</th>
		 <th>Estimated Total Cost</th>
		 <th>Job Start Date</th>
		 <th>Job Expire Date</th>


		 </tr>
		 </thead>
		 <tbody>
		 <?php
//  $row = $qresult->fetch_assoc(); fetch(PDO::FETCH_ASSOC)

		 while($res = $result->fetch_assoc())
		 {
			 if($res!=0)
			 {
				 ?>

				 <div class="container-fluid">

						 <tr>

						 <td><?= $res['job_name']; ?> </td>
						 <td><?= $res['location']; ?> </td>
						 <td><?= $res['Discription']; ?> </td>
						 <td><?= $res['Expected_Cost']; ?> </td>
						 <td><?= $res['Start_Date']; ?> </td>
						 <td><?= $res['End_Date']; ?> </td>

						 </tr>
				 </div>

		 <?php
			 }
			 if($res==0)
			 {
				 return "Sorry No Records Found..";
			 }
		 }?>
		 </tbody>
		 </table>
		 <?php
 }

 public function view_all_job()
 {

	 $query = "SELECT * FROM job";
	 $result = $this->db->query($query) or die($this->db->error);
	//$result->execute();

		 ?>
		 <table class = "table table-hover">
		 <thead>
		 <tr>

		 <th>Job Name</th>
		 <th>Location</th>
		 <th>Job Expire Date</th>


		 </tr>
		 </thead>
		 <tbody>
		 <?php
//  $row = $qresult->fetch_assoc(); fetch(PDO::FETCH_ASSOC)
		 while($res = $result->fetch_assoc())
		 {

				 ?>

				 <div class="container-fluid">

						 <tr>

						 <td><?= $res['job_name']; ?> </td>
						 <td><?= $res['location']; ?> </td>

						 <td><?= $res['End_Date']; ?> </td>
						 <td><a href="jobdetail.php?jid=<?php echo $res['jid']; ?>" class="btn btn-info">Details</a></td>


						 </tr>
				 </div>

		 <?php
		 }?>
		 </tbody>
		 </table>
		 <?php
 }

 public function view_job($jid)
 {

		 $query = "SELECT  `job_name`, `location`, `Discription`, `Expected_Cost`, `Start_Date`, `End_Date` FROM `job` WHERE jid='$jid'";
	 $result = $this->db->query($query) or die($this->db->error);
	//$result->execute();


		 while($res = $result->fetch_assoc())
		 {



						$jname= $res['job_name'];
						$jlocation= $res['location'];
						$desc=$res['Discription'];
						$ecost=$res['Expected_Cost'];
						 $sdate=$res['Start_Date'];
						 $enddate= $res['End_Date'];
			$d = array();
			array_push($d,$jname,$jlocation,$desc,$ecost,$sdate,$enddate  );
						return $d;



		 }

 }





}

?>
