<?php
class UserModel extends Model{
	public function register(){
			// Sanitize post arra
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//if($post['name'] == '' || $post['email'] == '' || $post['password'] == '')

		$password = md5($post['password']);

		if($post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
				Messages::setMsg('Please fill in all fields', 'error'); 
				return;
			}
			// INSERT INTO MYSQL
			$this->query('INSERT INTO users(name, email, password) VALUES (:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();

			//Verify
			if($this->lastInsertId()){
				//Redireect
				Messages::setMsg('You have Successfully Registered, Please wait', 'successMsg'); 
				header( "refresh:2; url=http://localhost/phpsandbox/phptutorials/website2/users/login" );
			}
		}
		return;
	}

	public function login(){
			// Sanitize post arra
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		
		if($post['submit']){
			// Compare login
			$this->query("SELECT us.id, us.user_name, us.password, un.university_name, us.`status`, us.university_id
						FROM university un JOIN users us ON un.id = us.university_id WHERE user_name = :name AND password = :password ");
			$this->bind(':name', $post['name']);
			$this->bind(':password', $post['password']);
			$this->execute();

			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id"	=> $row['university_id'],
					"name" => $row['user_name'],
					"university_name"	=> $row['university_name'],
					"status" => $row['status']
				);

				
				Messages::setMsg('You have Successfully Logged in, Please wait', 'successMsg'); 
				header( "refresh:2; url=http://localhost/phpsandbox/megadb/" );
				
			} else { 
				Messages::setMsg('Incorrect Login, Try again', 'error'); 
			}
			
		}
		return;
	}
}