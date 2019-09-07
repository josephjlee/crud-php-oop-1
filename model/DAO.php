<?php

require "Connection.php";

class DAO extends Connection{

	private $id;
	private $name;
	private $surname;
	private $phone_number;
	private $email;

	public function insert($data){

		try{
			$this->name = $data['name'];
			$this->surname = $data['surname'];
			$this->phone_number = $data['phone_number'];
			$this->email = $data['email'];

			$sql = "INSERT INTO contacts (name, surname, phone_number, email) VALUES (:name, :surname, :phone_number, :email)";

			$stmt = $this->connect()->prepare($sql);
			$stmt->bindParam(":name", $this->name, PDO::PARAM_STR);
			$stmt->bindParam(":surname", $this->surname, PDO::PARAM_STR);
			$stmt->bindParam(":phone_number", $this->phone_number, PDO::PARAM_INT);
			$stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
			$stmt->execute();

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
	}

	public function select(){

		try{
			$sql = "SELECT * FROM contacts ORDER BY id DESC";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute();

			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
	}

		public function selectBy($id){
		
		try{
			$this->id = $id;

			$sql = "SELECT * FROM contacts WHERE id = :id";
			$stmt = $this->connect()->prepare($sql);
			$stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
			$stmt->execute();

			return $stmt->fetch(PDO::FETCH_ASSOC);

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
	}

	public function update($data){

		try{
			$this->id = $data['id'];
			$this->name = $data['name'];
			$this->surname = $data['surname'];
			$this->phone_number = $data['phone_number'];
			$this->email = $data['email'];

			$sql = "UPDATE contacts set name = :name, surname = :surname, phone_number = :phone_number, email = :email WHERE id = :id";

			$stmt = $this->connect()->prepare($sql);
			$stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
			$stmt->bindParam(":name", $this->name, PDO::PARAM_STR);
			$stmt->bindParam(":surname", $this->surname, PDO::PARAM_STR);
			$stmt->bindParam(":phone_number", $this->phone_number, PDO::PARAM_INT);
			$stmt->bindParam(":email", $this->email, PDO::PARAM_STR);
			$stmt->execute();

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
	}

	public function delete($id){

		try{
			$this->id = $id;

			$sql = "DELETE FROM contacts WHERE id = :id";

			$stmt = $this->connect()->prepare($sql);
			$stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
			$stmt->execute();

		} catch(PDOException $ex){
			echo "Error: ".$ex->getMessage();
		}
	}
}

?>