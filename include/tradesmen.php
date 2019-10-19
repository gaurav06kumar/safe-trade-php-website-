<?php
	include "db_config.php";
	class tradesmen{
		protected $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();
		}

		/*** for registration process ***/

		public function reg_user($name,$username,$password,$email){
			//echo "k";

			//checking if the username or email is available in db
			$query = "SELECT * FROM tradesmeninfo WHERE T_username='$username' OR T_email='$email'";

			$result = $this->db->query($query) or die($this->db->error);

			$count_row = $result->num_rows;

			//if the username is not in db then insert to the table

			if($count_row == 0){
				$query = "INSERT INTO tradesmeninfo SET T_username='$username', T_pass='$password', T_fname='$name', T_email='$email'";

				$result = $this->db->query($query) or die($this->db->error);

				return true;
			}
			else{return false;}


			}


	/*** for login process ***/
		public function check_login($emailusername, $password){
      //  $password = md5($password);

		$query = "SELECT TID from tradesmeninfo WHERE T_email='$emailusername'   and T_pass='$password'";

		$result = $this->db->query($query) or die($this->db->error);


		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;

		if ($count_row == 1) {

	            $_SESSION['TID'] = $user_data['TID'];
	            return true;
	        }

		else{return false;}


	}


	public function get_fullname($tid){
		$query = "SELECT T_fname FROM tradesmeninfo WHERE TID = $tid";

		$result = $this->db->query($query) or die($this->db->error);

		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['T_fname'];

	}










}
