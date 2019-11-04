<?php
//this class contains the information of customer tradesman information 

	require_once("db_config.php");
	class tradesmen{
  public $tid =null;
  public $tname ="";
	public $tusername="";
	public $tpassword="";
	public $temail="";



    //passing the inforamtion as in form of argumnets and set the private property
	public function __construct($tid,$name,$username,$password,$email){
 	 $this->tid = $tid;
 	 $this->tname = $name;
 	 $this->tusername = $username;
 	 $this->tpassword = $password;
 	 $this->temail = $email;
  }

		/*** for registration process ***/

		public static function reg_user($db,$name,$username,$password,$email){
			$password = md5($password);
			//checking if the username or email is available in db
			$query = "SELECT * FROM tradesmeninfo WHERE T_username='$username' and T_email='$email'";

			$result = $db->query($query) or die($db->error);

			$count_row = $result->num_rows;

			//if the username is not in db then insert to the table

			if($count_row == 0){
				$query = "INSERT INTO tradesmeninfo SET T_username='$username', T_pass='$password', T_fname='$name', T_email='$email'";

				$result = $db->query($query) or die($db->error);
				if($result)
				{
					$tid = $db->insert_id;
					$tuser = new tradesmen($tid,$name,$username,$password,$email);
		      $result = $tuser;
				}
				 return $result;


			}
			else{
				$x='0';
			return $x;}


			}


	/*** for login process ***/
		public static function check_login($db,$emailusername, $password){
        $password = md5($password);

		$query = "SELECT * from tradesmeninfo WHERE T_email='$emailusername'   and T_pass='$password'";

		$result = $db->query($query) or die($db->error);


		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;

		if ($count_row == 1) {
			$user = new tradesmen($user_data['TID'],$user_data['T_fname'],$user_data['T_username'],$user_data['T_pass'],$user_data['T_email']);
			$result = $user;
	            $_SESSION['TID'] = $user_data['TID'];
	            return $result;
	        }




	}



	public static function find($db, $id){
		// search tradesmen table and locate record with id
		// get that record and create tradesmen object
		// return tradesmen object OR false if we cannot find it
		$result = false;
			$query = "SELECT * FROM tradesmeninfo WHERE TID = $id";
			$result = $db->query($query) or die($db->error);
		if ($result){
			if ($result->num_rows == 1){
				$user_data = $result->fetch_assoc();
				$user = new tradesmen($user_data['TID'],$user_data['T_fname'],$user_data['T_username'],$user_data['T_pass'],$user_data['T_email']);

				$result = $user;
			}
		}
		return $result;
	}




		// ------- getter methods ----------
		public function getName(){
			return $this->tname;
		}

		public function getId(){
			return $this->tid;
		}

		public function getEmail(){
			return $this->temail;
		}

		public function getUname(){
			return $this->tusername;
		}

		public function getPass(){
			return $this->tpassword;
		}






}
