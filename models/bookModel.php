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
			$post[$i]["id"] = $rows->id;
			$i++;
		}
    	echo json_encode($post);
    
	}
	function loadBookCategory($offset)
	{
		$i=0;
		$info = "SELECT givenCategory FROM `categoryInformation`";
		$result2 = $this->db->query($info);
		$id=array();
		foreach($result2->result() as $rows)
		{
			$id[0]["givenCategory"] = $rows->givenCategory;
			break;
		}
		$sql="";
		$result="";
		if($id==null)
		{
			$sql = "SELECT * FROM `book` LIMIT 6 OFFSET ".$offset ;
			$result = $this->db->query($sql);
		}
		else
		{
			$sql = "SELECT * FROM `book` 
				 WHERE category = '". $id[0]["givenCategory"]."'";
			$result = $this->db->query($sql);
		}
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
			$post[$i]["id"] = $rows->id;
			$i++;
		}
		$info2 = "TRUNCATE TABLE `categoryInformation` ";
		$this->db->query($info2);
    	echo json_encode($post);
    
	}
	function loadBookId()
	{
		$info = "SELECT givenid FROM `information`";
		$result2 = $this->db->query($info);
		$id=array();
		foreach($result2->result() as $rows)
		{
			$id[0]["givenid"] = $rows->givenid;
			break;
		}
		$sql = "SELECT * FROM `book` 
			 WHERE id = ". $id[0]["givenid"];
		$result = $this->db->query($sql);
		$post=array();
		foreach($result->result() as $rows)
		{
			$post[0]["name"] = $rows->name;
			$post[0]["publisher"] = $rows->publisher;
			$post[0]["writer"] = $rows->writer;
			$post[0]["publishedDate"] = $rows->publishedDate;
			$post[0]["description"] = $rows->description;
			$post[0]["price"] = $rows->price;
			$post[0]["counter"] = $rows->counter;
			$post[0]["photo"] = $rows->photo;
			$post[0]["category"] = $rows->category;
			$post[0]["id"] = $rows->id;
			break;
		}
		$info2 = "TRUNCATE TABLE `information` ";
		$this->db->query($info2);
    	echo json_encode($post);
    
	}
	function search($offset, $category, $name, $writer, $publisher, $publishedDate)
	{
		$i=0;
		$started=0;
		$name = trim($name);
		$writer = trim($writer);
		$publisher = trim($publisher);
		$publishedDate = trim($publishedDate);
		$category = trim($category);
		$commandName = "`name` = '".$name."'";
		$commandWriter = "`writer` = '".$writer."'";
		$commandPublisher = "`publisher` = '".$publisher."'";
		$commandPublishedDate = "`publishedDate` = '".$publishedDate."'";
		$commandCategory = "`category` = '".$category."'";
		$sql = "SELECT * FROM `book` ";
		if($name!=null && $name!="")
		{
			$sql .= "WHERE ".$commandName." AND ";
			$started=1;
		}
		
		if($writer!=null && $writer!="")
		{
			if($started==0)
				$sql .= "WHERE ";
			$sql .= $commandWriter." AND ";
			$started=1;
		}
		if($publisher !=null && $publisher!="")
		{
			if($started==0)
				$sql .= "WHERE ";
			$sql .= $commandPublisher." AND ";
			$started=1;
		}
		if($publishedDate!=null && $publishedDate!="")
		{
			if($started==0)
				$sql .= "WHERE ";
			$sql .= $commandPublishedDate." AND ";
			$started=1;
		}
		if($category!=null && $category!="")
		{
			if($started==0)
				$sql .= "WHERE ";
			$sql .= $commandCategory." AND ";
			$started=1;
		}
		
		$sql = substr( $sql, 0, -4 );
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
			$post[$i]["id"] = $rows->id;
			
			$i++;
		}
    	echo json_encode($post);
    
	}

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
	function addid($id)
	{
		$all = array(
		'givenid'=>$id
		);
		//print_r($all);
		$res=$this->db->insert('information',$all);
		return;
	}
	function track($invoiceID)
	{
		$sql = "SELECT * FROM `cart`
			 WHERE `id` =". (int)$invoiceID;
    	$result = $this->db->query($sql);
		$post=array();
		foreach($result->result() as $rows)
		{
			$post[0]["sts"] = $rows->sts;
			$post[0]["place"] = $rows->place;
			break;
		}
    	echo json_encode($post);
	}

	


}
?>