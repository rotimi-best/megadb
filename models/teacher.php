<?php
class TeacherModel extends Model{

  public function Index(){
    $university_id = $_SESSION['user_data']['id'];
		$this->query('SELECT * FROM teachers WHERE university_id = :id ORDER BY id desc ');
		$this->bind(':id', $university_id);
		$rows = $this->resultSet();
		return $rows;
  }

  public function addteacher(){

    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


		if($post['submit']){
			// Check if the user filled in all parts oof the form
			if($post['name'] == '' || $post['subject'] == '' || $post['phone'] == '' || $post['email'] == ''){
				Messages::setMsg('Please fill in all fields', 'error');
				return;
			}
			$universityid = $_SESSION['user_data']['id'];

			$repStringName = str_replace(' ', '', $post['name']);
			$checkName = ctype_alpha($repStringName);

			$repStringSubject = str_replace(' ', '', $post['subject']);
			$checkSubject = ctype_alpha($repStringSubject);

			$checkPhone = ctype_digit($post['phone']);
			
			$email = $post['email'];

			if($checkName == FALSE){
				Messages::setMsg('Please use a valid input for Name', 'error');
				return;
			}elseif($checkSubject == FALSE) {
				Messages::setMsg('Please use a valid input for Subject', 'error');
				return;
			} elseif($checkPhone == FALSE) {
				Messages::setMsg('Please use a valid input for Phone', 'error');
				return;
			}

			// Insert all the data into the database
			$this->query('INSERT INTO teachers(name, subject, phone, email, university_id)
						  VALUES (:name, :subject, :phone, :email, :universityid)' );
			$this->bind(':name', $post['name']);
			$this->bind(':subject', $post['subject']);
      		$this->bind(':phone', $post['phone']);
			$this->bind(':email', $email);
			$this->bind(':universityid', $universityid);
			$this->execute();

			$this->query("INSERT INTO dropdown (hall_id, hall_number, teacher_id, teacher_name)
                    SELECT 0, 0, teacher_id, name
                    FROM teachers
                    WHERE teacher_id = (
                    	SELECT MAX(teachers.teacher_id)
                    	FROM teachers
                      )");
			$this->execute();


			if($this->lastInsertId()){
				//Redireect
				Messages::setMsg('You have Successfully Added a New Teacher', 'successMsg');
				header( "refresh:2; url=http://localhost/phpsandbox/megadb/teachers/");
			}

		}
		return;

  }

}
