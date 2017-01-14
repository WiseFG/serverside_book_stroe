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
		$sql = "SELECT * FROM `book` limit".$offset." 6" ;
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
	function loadBookCategory($category)
	{

		 $sql = "SELECT * FROM `book` 
			 WHERE `category` = '". $category ."'";
    	$result = $this->db->query($sql);
    	echo json_encode( $result->result());
    
	}
	function loadBookPublisher($publisher)
	{

		 $sql = "SELECT * FROM `book` 
			 WHERE `publisher` = '". $publisher ."'";
    	$result = $this->db->query($sql);
    	echo json_encode( $result->result());
    
	}
	function loadBookWriter($writer)
	{

		 $sql = "SELECT * FROM `book` 
			 WHERE `writer` = '". $writer ."'";
    	$result = $this->db->query($sql);
    	echo json_encode( $result->result());
    
	}
	function loadBookDate($publishedDate)
	{

		 $sql = "SELECT * FROM `book` 
			 WHERE `publishedDate` = '". $publishedDate ."'";
    	$result = $this->db->query($sql);
    	echo json_encode( $result->result());
    
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

	


}
?>