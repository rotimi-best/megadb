<?php
class LecturehallModel extends Model{

	public function Index(){
		$university_id = $_SESSION['user_data']['id'];

		$this->query('SELECT * FROM halls WHERE university_id = :id ORDER BY id desc ');
		$this->bind(':id', $university_id);
		$rows = $this->resultSet();
		return $rows;
	}

	public function addactivity(){
		$this->query('SELECT teacher_id, hall_id, hall_number, teacher_name FROM dropdown ORDER BY hall_number');
		$rows = $this->resultSet();
		return $rows;
	}


	public function viewactivity(){


		if(isset($_POST['submit'])){
			$hallid = $_POST['hallid'];
		$this->query('	SELECT halls.id, selecthall.selecthall_id, hall_number, name, selecthall.status, comment, subject, selecthall.time 
						FROM selecthall JOIN halls ON halls.id = selecthall.hall_id 
						JOIN teachers ON teachers.id = selecthall.teacher_id 
						WHERE halls.id = :hallid 
						ORDER BY selecthall.selecthall_id DESC');
		$this->bind(':hallid', $hallid);
		$rows = $this->resultSet();
		return $rows;

		}

	}

	public function delete(){

		if(isset($_POST['delete'])){
			$selecthallid = $_POST['selecthallid'];
			$hallid = $_POST['hallid'];

			$this->query('DELETE FROM selecthall WHERE selecthall_id = :id');
			$this->bind('id', $selecthallid);
			$this->execute();

			$this->query('SELECT hall_id FROM dropdown WHERE hall_id = :id');
			$this->bind('id', $hallid);
			$rows = $this->resultSet();
			return $rows;
		} 

	}

	public function addhall(){
		// Fileter the input to avoid sql injection from hackers
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


		if($post['submit']){
			// Check if the user filled in all parts oof the form
			if($post['number'] == '' || $post['table'] == '' || $post['chair'] == '' || $post['size'] == ''){
				Messages::setMsg('Please fill in all fields', 'error');
				return;
			}
			$checkChair = ctype_alpha($post['chair']);
			$checkTable = ctype_alpha($post['table']);
			$checkSize = ctype_digit($post['size']);

			if($checkChair){
				Messages::setMsg('Please use a number for Chairs', 'error');
				return;
			}elseif ($checkTable) {
				Messages::setMsg('Please use a number for tables', 'error');
				return;
			} elseif ($checkSize) {
				Messages::setMsg('Please use a text for Size', 'error');
				return;
			}

			$this->query('SELECT hall_number FROM halls WHERE hall_number = :hallnumber');
			$this->bind(':hallnumber', $post['number']);

			$myRow = $this->single();

					if($myRow){
						Messages::setMsg('Sorry hall already Exists, Try Again', 'error');
						return;
					} else{

					$universityid = $_SESSION['user_data']['id'];
					$time = date('Y-m-d H:i:s');
					$status = 'Locked';
					// Insert all the data into the database
					$this->query('INSERT INTO halls(hall_number, hall_status, university_id, time, chairs, tables, size)
												VALUES (:hallnumber, :status, :universityid, :time, :chairs, :tables, :size)' );
					$this->bind(':hallnumber', $post['number']);
					$this->bind(':status', $status);
					$this->bind(':universityid', $universityid);
					$this->bind(':time', $time);
					$this->bind(':chairs', $post['chair']);
					$this->bind(':tables', $post['table']);
					$this->bind(':size', $post['size']);
					$this->execute();

					$this->query("INSERT INTO dropdown (hall_id, hall_number, teacher_id, teacher_name)
					SELECT hall_id, hall_number, 0, ' '
					FROM halls
					WHERE hall_id = (
						SELECT MAX(halls.hall_id)
						FROM halls)");
					$this->execute();

					if($this->lastInsertId()){
						//Redireect
						Messages::setMsg('You have Successfully Added a New Hall', 'successMsg');
						header( "refresh:2; url=http://localhost/phpsandbox/megadb/lecturehalls");
					}
				  
				}
			}
		return;

}

	public function gotoview(){

		if(isset($_POST['submit'])){
			$hallid = $_POST['hall_id'];
			$teacherid = $_POST['teacher_id'];
			$cmt = $_POST['comment'];
			$time = date('Y-m-d H:i:s');


			if($hallid == '' || $teacherid == '' || empty($_POST['radio']) == ''|| $cmt == ''){
				Messages::setMsg('Please fill in all fields', 'error');
				header( "refresh:2; url=http://localhost/phpsandbox/megadb/lecturehalls/addactivity" );
				return;
			}

			$this->query('INSERT INTO selecthall(hall_id, teacher_id, status, comment, time) VALUES (:hallid, :teacherid, :status, :comment, :time)');
			$this->bind(':hallid', $hallid);
			$this->bind(':teacherid', $teacherid);
			$this->bind(':status', $_POST['status']);
			$this->bind(':comment', $cmt);
			$this->bind(':time', $time);
			$this->execute();

			if($this->lastInsertId()){
				//Redireect
				Messages::setMsg('You have succesfully posted, Please Wait', 'successMsg');
				

			}

		}

		$this->query("SELECT h.id, h.hall_number
					  FROM halls h
				      JOIN selecthall s ON s.hall_id = h.id
					  WHERE s.selecthall_id = (
					  SELECT MAX(selecthall_id)
					  FROM selecthall)");
		$rows = $this->single();
		return $rows;
	}

}
