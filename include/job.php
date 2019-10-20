<?php
	include "db_config.php";
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



}

?>
