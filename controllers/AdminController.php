<?php


class AdminController
{
	
	public function actionIndex()
	{
		/* for HTML messages */
		$_SESSION['deleted'] = false;
		$_SESSION['added'] = false;
		$redactedVariable = false;
		$errors = false;
		
		$action = 'Admin'; // html title name
		$fails = '';
		
		// checking user action (3 different actions on 1 page realized with html-tabs)
		if (isset($_POST['del'])) {
			self::actionDel($_POST['del']);
		} elseif (isset($_POST['add'])) {
			$fails = self::actionAdd();
		} elseif (isset($_POST['red'])) {
			self::actionRedItem();
			$redactedVariable = $_SESSION['redacted'];
		}
		
		
		// if user is authorised - show him admin view
		if (isset($_SESSION['user'])){
			require_once(ROOT.'/views/admin.php');
			$redactedVariable = false; // for html (3 different actions on 1 page realized with html-tabs)
			return true;
		} else {
			header("Location: /login");
		}
	}
	
	// adding new item to Db
	public function actionAdd()
	{

		if (isset($_POST['add'])) {
			
			$title = $_POST['title'];
			$description = $_POST['description'];
			$trailerFrame = $_POST['trailerFrame'];
			
			$fotoName = $_FILES['image']['name'];
		
			// validation fields
			if (empty($title)) {
				$errors[] = 'Пустое поле title';
			}
			if (empty($description)) {
				$errors[] = 'Пустое поле description';
			}
			if (empty($trailerFrame)) {
				$errors[] = 'Пустое поле trailerFrame';
			}
			if (empty($fotoName)) {
				$errors[] = 'Не загружено изображение';
			}
			
			if (!empty($errors)) {
				// for html show errors of validation fields
				$fails = $errors;
				return $fails;
			}
		
			// adding item to Db
			$_SESSION['added'] = Item::addNewItem($title, $description, $trailerFrame, $fotoName);
			// if item added - moving image to the project
			if ($_SESSION['added']) {
				move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/' . $fotoName);
			}
			
		}
			
	}
	
	// deleting item from Db
	public function actionDel($id)
	{
		$_SESSION['deletedId'] = $id;
		$_SESSION['deleted'] = Item::delItemById($id);
		
	}
	
	// editing item
	public function actionRedItem()
	{
		if (isset($_POST['red'])) {
			$id = $_POST['id'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			$trailerFrame = $_POST['trailerFrame'];
			// save old foto name for saving picture
			$fotoName = $_POST['old-foto'];
			
			// if we have a new image - take its name
			if ($_FILES['image']['error'] != 4) {
			$fotoName = $_FILES['image']['name'];
			} else {
				$fotoName = $_POST['old-foto'];
			}
			
			$_SESSION['redactedId'] = $_POST['id']; // for html
			$_SESSION['redacted'] = Item::redactItem($id, $title, $description, $trailerFrame, $fotoName);
			// if item edited - change image in the project
			if (($_FILES['image']['error'] != 4) && ($_SESSION['redacted'])) {
				move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/img/' . $fotoName);
			}
			
		}
		
		
	}
	
	// editing item in Db
	public function actionRed($id)
	{
		$action = 'Редактирование'; // for html title
		
		// get all info from Db for edit
		$infoToRed = Item::getItemById($id);
		
		// show edit view
		if (isset($_SESSION['user'])){
			require_once(ROOT.'/views/red.php');
			return true;
		} else {
			header("Location: /login");
		}
	}
	
	
	
}