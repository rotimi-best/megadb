<?php
class HomeModel extends Model{
	public function Index(){
		return;
	}

	public function about(){
		$university_id = $_SESSION['user_data']['id'];
		$this->query('SELECT us.password, us.status, us.first_name, us.user_name, u.university_name, u.founder_name, u.total_students, u.address, us.phone_number
					  FROM university u JOIN users us ON us.university_id = u.id WHERE u.id = :id');
		$this->bind(':id', $university_id);
		$rows = $this->resultSet();
		return $rows;
	}

	public function newadmin(){
			
		if(isset($_POST['submit'])){
			

			$university_id = $_SESSION['user_data']['id'];
			$password = substr(md5(time()), 0,6);
			$status = 'sub-admin';

			$this->query("INSERT INTO users(first_name, user_name, phone_number, password, university_id, status) 
						  VALUES(:firstname, :username, :phone, :pass, :id, :status)");
			$this->bind(':firstname', $_POST['first_name']);
			$this->bind(':username', $_POST['user_name']);
	  		$this->bind(':phone', $_POST['phone']);
			$this->bind(':pass', $password);
			$this->bind(':id', $university_id);
			$this->bind(':status', $status);
			$this->execute();


		if($this->lastInsertId()){
				//Redireect
				Messages::setMsg('You have Successfully Added a Sub Admin', 'successMsg');
				header( "refresh:2; url=http://localhost/phpsandbox/megadb/home/about");
			}

		}
		return;
	}
	
}
