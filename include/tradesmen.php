<?php
	require_once("db_config.php");
	class tradesmen{
  public $tid =null;
  public $tname ="";
	public $tusername="";
	public $tpassword="";
	public $temail="";




	public function __construct($tid,$name,$username,$password,$email){
 	 $this->tid = $tid;
 	 $this->tname = $name;
 	 $this->tusername = $username;
 	 $this->tpassword = $password;
 	 $this->temail = $email;
  }

		/*** for registration process ***/

		public static function reg_user($db,$name,$username,$password,$email){
			//echo "k";

			//checking if the username or email is available in db
			$query = "SELECT * FROM tradesmeninfo WHERE T_username='$username' OR T_email='$email'";

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
      //  $password = md5($password);

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


	public static function get_fullname($db,$tid){
		$query = "SELECT T_fname FROM tradesmeninfo WHERE TID = $tid";

		$result = $db->query($query) or die($db->error);

		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['T_fname'];

	}
	public static  function view_Tprofile($db,$tid)
  {
		$query = "SELECT `T_username`, `T_fname`, `T_pass`, `T_email` FROM `tradesmeninfo`WHERE TID=$tid";
    //$query = "SELECT `uname`, `upass`, `fullname`, `uemail`FROM customerinfo WHERE uid = $uid";
 	 $result = $db->query($query) or die($db->error);
 	//$result->execute();

	$res = $result->fetch_array(MYSQLI_ASSOC);




        $name=$res['T_fname'];
				$username=$res['T_username'];
				$password=$res['T_pass'];
				$email=$res['T_email'];
				$d = array();
 			array_push($d,$name,$username,$email,$password);
 			return $d;




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
