<?php
Class StatisticModel extends Model{

	public function Index(){
		return;
	}

	public function freehall(){
		
		  $this->query("SELECT s.selecthall_id, h.id, h.hall_number, t.name, s.status, s.time, s.comment, h.chairs
						FROM halls h JOIN selecthall s ON s.selecthall_id = (
							SELECT s.selecthall_id FROM halls 	JOIN selecthall s ON halls.id = s.hall_id
							WHERE halls.id = h.id ORDER BY s.time DESC LIMIT 1)
						JOIN teachers t ON t.id = s.teacher_id
						WHERE s.status = 'Returned' ORDER BY s.selecthall_id");
		$rows = $this->resultSet();
		return $rows;
	}

	public function busyhall(){
		$this->query("SELECT s.selecthall_id, h.id, h.hall_number, t.name, s.status, s.time, s.comment, h.chairs
						FROM halls h
						JOIN selecthall s ON s.selecthall_id = (
							SELECT s.selecthall_id
							FROM halls
							JOIN selecthall s ON halls.id = s.hall_id
							WHERE halls.id = h.id
							ORDER BY s.selecthall_id DESC
							LIMIT 1)
						JOIN teachers t ON t.id = s.teacher_id
						WHERE s.status = 'Taken'
						ORDER BY s.selecthall_id DESC");
		$rows = $this->resultSet();
		return $rows;
	}

	public function teacherwithkey(){
		$this->query("SELECT s.selecthall_id, h.id, h.hall_number, t.name, t.subject, t.phone, t.email
					FROM halls h
					JOIN selecthall s ON s.selecthall_id = (
						SELECT s.selecthall_id
						FROM halls
						JOIN selecthall s ON halls.id = s.hall_id
						WHERE halls.id = h.id
						ORDER BY s.time DESC
						LIMIT 1)
					JOIN teachers t ON t.id = s.teacher_id
					WHERE s.status = 'Taken'
					ORDER BY s.selecthall_id");
		$rows = $this->resultSet();
		return $rows;
	}

	public function minchairtable(){
		$this->query("SELECT id, hall_number, chairs, tables, size FROM halls WHERE chairs = 
					(SELECT MIN(chairs)	FROM halls) AND tables = (SELECT MIN(tables) FROM halls)");
		$rows = $this->resultSet();
		return $rows;
	}

	public function maxchairtable(){
		$this->query("SELECT id, hall_number, chairs, tables, size FROM halls WHERE chairs = (SELECT MAX(chairs) FROM halls) 
					  OR tables = (SELECT MAX(tables) FROM halls )");
		$rows = $this->resultSet();
		return $rows;
	}




}