<?php 
class bookModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}
	function loadBookGeneral($offset)
	{
		$i=0;
		$sql = "SELECT * FROM `book` LIMIT 6 OFFSET ".$offset ;
    	$result = $this->db->query($sql);
		$post=array();
		foreach($result->result() as $rows)
		{
			$post[$i]["name"] = $rows->name;
			$post[$i]["publisher"] = $rows->publisher;
			$post[$i]["writer"] = $rows->writer;
			$post[$i]["publishedDate"] = $rows->publishedDate;
			$post[$i]["description"] = $rows->description;
			$post[$i]["price"] = $rows->price;
			$post[$i]["counter"] = $rows->counter;
			$post[$i]["photo"] = $rows->photo;
			$post[$i]["category"] = $rows->category;
			$i++;
		}
    	echo json_encode($post);
    
	}
	function loadBookCategory($category, $offset)
	{
		$i=0;
		$sql = "SELECT * FROM `book` 
			 WHERE `category` = '". $category ."'
			 LIMIT 6 OFFSET ".$offset ;
		$result = $this->db->query($sql);
		$post=array();
		foreach($result->result() as $rows)
		{
			$post[$i]["name"] = $rows->name;
			$post[$i]["publisher"] = $rows->publisher;
			$post[$i]["writer"] = $rows->writer;
			$post[$i]["publishedDate"] = $rows->publishedDate;
			$post[$i]["description"] = $rows->description;
			$post[$i]["price"] = $rows->price;
			$post[$i]["counter"] = $rows->counter;
			$post[$i]["photo"] = $rows->photo;
			$post[$i]["category"] = $rows->category;
			$i++;
		}
    	echo json_encode($post);
    
	}
	/*function search($offset, $category, $name, $writer, $publisher, $publishedDate)
	{
		$i=0;
		$started=0;
		$name = trim($name);
		$writer = trim($writer);
		$publisher = trim($publisher);
		$publishedDate = trim($publishedDate);
		$category = trim($category);
		$commandName = "`name` = '".$name"'";
		$commandWriter = "`writer` = '".$writer"'";
		$commandPublisher = "`publisher` = '".$publisher"'";
		$commandPublishedDate = "`publishedDate` = '".$publishedDate"'";
		$commandCategory = "`category` = '".$category"'";
		$sql = "SELECT * FROM `book` ";
		if($name!=null && $name!="")
		{
			$sql .= "WHERE ".$commandName." AND ";
		}
		
		if($writer!=null && $writer!="")
		{
			$sql .= "WHERE ".$commandWriter." AND ";		
		}
		if($publisher !=null && $publisher!="")
		{
			$sql .= "WHERE ".$commandPublisher." AND ";
		}
		if($publishedDate!=null && $publishedDate!="")
		{
			$sql .= "WHERE ".$commandPublishedDate." AND ";
		}
		if($category!=null && $category!="")
		{
			$sql .= "WHERE ".$commandCategory." AND ";	
		}
		
		$sql = substr( $str1, 0, -4 );
		echo $sql;
		$sql .= "LIMIT 6 OFFSET ".$offset;
		
		$result = $this->db->query($sql);
		$post=array();
		foreach($result->result() as $rows)
		{
			$post[$i]["name"] = $rows->name;
			$post[$i]["publisher"] = $rows->publisher;
			$post[$i]["writer"] = $rows->writer;
			$post[$i]["publishedDate"] = $rows->publishedDate;
			$post[$i]["description"] = $rows->description;
			$post[$i]["price"] = $rows->price;
			$post[$i]["counter"] = $rows->counter;
			$post[$i]["photo"] = $rows->photo;
			$post[$i]["category"] = $rows->category;
			$i++;
		}
    	echo json_encode($post);
    
	}*/

	function add($name, $writer, $publishedDate, $publisher, $description, $price, $count, $photo, $category)
	{
		$all = array(
		'name'=>$name,
		'publisher'=>$publisher,
		'writer'=>$writer,
		'publishedDate'=>$publishedDate,
		'description'=>$description,	
		'price'=>$price,
		'count' => $count,
        'photo' => $photo,
		'category' => $category
		);
		//print_r($all);
		$res=$this->db->insert('book',$all);
		return $res;
	}

	


}
?>