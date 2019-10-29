<?php
	include_once 'db_config.php';
	class User{

 private $uid=null;
 private $fname ="";
 private $username="";
 private $password="";
 private $email="";


 public function __construct($uid,$name,$username,$password,$email){
	 $this->uid = $uid;
	 $this->fname = $name;
	 $this->username = $username;
	 $this->password = $password;
	 $this->email = $email;
 }

		/*** for registration process ***/

		public  static function reg_user($db,$name,$username,$password,$email){
			// create a new student record in students table and if successful
			// create a student object and return it otherwise return false;
			 $result = false;
			$query = "SELECT * FROM customerinfo WHERE uname='$username' OR uemail='$email'";

			$result = $db->query($query) or die($db->error);

			$count_row = $result->num_rows;

			//if the username is not in db then insert to the table

			if($count_row == 0){
				$query = "INSERT INTO customerinfo SET uname='$username', upass='$password', fullname='$name', uemail='$email'";

				$result = $db->query($query);
				if($result)
				{
					$id = $db->insert_id;
					$user = new User($id,$name,$username,$password,$email);
		      $result = $user;
				}
				 return $result;

			}
			else{
				  $x='0';
				return $x;
			}



			}




	/*** for login process ***/
		public static  function check_login($db,$emailusername, $password){
        //$password = md5($password);

		$query = "SELECT * from customerinfo WHERE uemail='$emailusername' or uname='$emailusername' and upass='$password'";

		$result = $db->query($query) or die($db->error);


		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;

		if ($count_row == 1) {



			$user = new User($user_data['uid'],$user_data['fullname'],$user_data['uname'],$user_data['upass'],$user_data['uemail']);
			$result = $user;

	     $_SESSION['uid'] = $user_data['uid'];

	            return $result;
	        }



	}


	public static function find($db, $id){
		// search students table and locate record with id
		// get that record and create student object
		// return student object OR false if we cannot find it
		$result = false;
		$query = "SELECT * FROM customerinfo WHERE uid = $id";
			$result = $db->query($query) or die($db->error);
		if ($result){
			if ($result->num_rows == 1){
				$user_data = $result->fetch_assoc();
					$user = new User($user_data['uid'],$user_data['fullname'],$user_data['uname'],$user_data['upass'],$user_data['uemail']);

				$result = $user;
			}
		}
		return $result;
	}





 


	// ------- getter methods ----------
	public function getName(){
		return $this->fname;
	}

	public function getId(){
		return $this->uid;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getUname(){
		return $this->username;
	}

	public function getPass(){
		return $this->password;
	}



}
