<?php
	include "db_config.php";
	class User{
		protected $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();
		}

		/*** for registration process ***/

		public function reg_user($name,$username,$password,$email){
			//echo "k";



			//checking if the username or email is available in db
			$query = "SELECT * FROM customerinfo WHERE uname='$username' OR uemail='$email'";

			$result = $this->db->query($query) or die($this->db->error);

			$count_row = $result->num_rows;

			//if the username is not in db then insert to the table

			if($count_row == 0){
				$query = "INSERT INTO customerinfo SET uname='$username', upass='$password', fullname='$name', uemail='$email'";

				$result = $this->db->query($query) or die($this->db->error);

				return true;
			}
			else{return false;}


			}


	/*** for login process ***/
		public function check_login($emailusername, $password){
        //$password = md5($password);

		$query = "SELECT uid from customerinfo WHERE uemail='$emailusername' or uname='$emailusername' and upass='$password'";

		$result = $this->db->query($query) or die($this->db->error);


		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;

		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            $_SESSION['uid'] = $user_data['uid'];
							$_SESSION['name']="gaurav";
	            return true;
	        }

		else{return false;}


	}


	public function get_fullname($uid){
		$query = "SELECT fullname FROM customerinfo WHERE uid = $uid";

		$result = $this->db->query($query) or die($this->db->error);

		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['fullname'];

	}



}
