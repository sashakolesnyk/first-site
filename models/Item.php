<?php

class Item
{
	public static function getItemById($id)
	{
		$id = intval($id);
		$db = Db::getConnection();
		
		$sql = 'SELECT * FROM items WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
			
		return $result->fetch();
		
		
		
		
	}
	
	public static function addNewItem($title, $description, $trailerFrame, $fotoName)
	{
		$db = Db::getConnection();
		
		$sql = 'INSERT INTO items (title, description, trailerFrame, fotoName) VALUES (:title, :description, :trailerFrame, :fotoName)';
		$result = $db->prepare($sql);
		$result->bindParam(':title', $title, PDO::PARAM_STR);
		$result->bindParam(':description', $description, PDO::PARAM_STR);
		$result->bindParam(':trailerFrame', $trailerFrame, PDO::PARAM_STR);
		$result->bindParam(':fotoName', $fotoName, PDO::PARAM_STR);
		
		if ($result->execute()) {
            // if request is correct - return this id
            return $db->lastInsertId();
        }
        // else return false (0)
        return 0;
		
		
		
		
	}
	
	public static function getAllItems()
	{
		$db = Db::getConnection();
		
		$sql = 'SELECT * FROM items ORDER BY createDate DESC';
		$result = $db->query($sql);
		$tableArray = array();
		
        $i = 0;
        while ($row = $result->fetch()) {
            $tableArray[$i]['id'] = $row['id'];
            $tableArray[$i]['title'] = $row['title'];
            $tableArray[$i]['description'] = $row['description'];
            $tableArray[$i]['fotoName'] = $row['fotoName'];
			$tableArray[$i]['trailerFrame'] = $row['trailerFrame'];
			$tableArray[$i]['views'] = $row['views'];
			$tableArray[$i]['createDate'] = $row['createDate'];
            $i++;
        }
        return $tableArray;
		
	}
	
	public static function delItemById($id)
	{
		$id = intval($id);
		$db = Db::getConnection();
		
		$sql = 'DELETE FROM items WHERE id = :id';
		
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		
			
		return $result->execute();
	}
	
	public static function redactItem($id, $title, $description, $trailerFrame, $fotoName)
	{
		$db = Db::getConnection();
		$id = intval($id);
		$sql = 'UPDATE items SET title = :title, description = :description, trailerFrame = :trailerFrame, fotoName = :fotoName WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':title', $title, PDO::PARAM_STR);
		$result->bindParam(':description', $description, PDO::PARAM_STR);
		$result->bindParam(':trailerFrame', $trailerFrame, PDO::PARAM_STR);
		$result->bindParam(':fotoName', $fotoName, PDO::PARAM_STR);
		
		if ($result->execute()) {
            // if request is correct - return true
            return true;
        }
       
        return 0;
		
		
	}
	
	public static function updateViews($id)
	{
		$db = Db::getConnection();
		$id = intval($id);
		$sql = 'UPDATE items SET views = views + 1 WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		
		
		if ($result->execute()) {
            // if request is correct - return true
            return true;
        }
        
        return 0;
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}