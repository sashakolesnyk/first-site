<?php


class SiteController
{
	public function actionIndex()
	{
		$itemsArray = Item::getAllItems();
		$action = 'Main'; // for html
		require_once(ROOT. '/views/index.php');

		return true;
	}
	
	public function actionContacts()
	{
		
		$action = 'Contacts'; // for html
		require_once(ROOT. '/views/contacts.php');

		return true;
	}
	
	public function actionItem($id)
	{
		$itemId = $id;
		$item = Item::getItemById($itemId);
		
		$action = $item['title']; // for html
		$itemId = $id;
		// increase the view +1 for chosen item
		Item::updateViews($itemId);
		
		require_once(ROOT . '/views/item.php');
		
		
		return true;
	}
	
	
	
	
	
	
	
	

}