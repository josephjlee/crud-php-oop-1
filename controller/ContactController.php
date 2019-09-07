<?php
session_start();
require "../model/DAO.php";

class ContactController{

	private $data;
	private $id;
	private $action;
	private $controller;

	public function action($action, $data = NULL, $id = NULL){

		if ($action == 'insert') {
			$this->controller = new DAO();
			$this->controller->insert($data);

			$_SESSION['msgSuccess'] = "<div class='alert alert-success text-center'><strong>Successfully created contact!</strong></div>";
			header("location: ../view/dashboard.php");

		}
		else if ($action == 'update') {
			$this->controller = new DAO();
			$this->controller->update($data);

			$_SESSION['msgSuccess'] = "<div class='alert alert-success text-center'><strong>Successfully updated contact!</strong></div>";
			header("location: ../view/showContact.php");

		}
		else if ($action == 'delete') {
			$this->controller = new DAO();
			$this->controller->delete($id);

			$_SESSION['msgSuccess'] = "<div class='alert alert-success text-center'><strong>Successfully deleted contact!</strong></div>";
			header("location: ../view/showContact.php");
		}
		else{
			$_SESSION['msgError'] = "<div class='alert alert-danger text-center'><strong>Error to perform this request!</strong></div>";
			header("location: ../view/dashboard.php");
		}
	}
}

$controller = new ContactController();
$controller->action($_GET['action'], $_POST, $_GET['id']);



?>