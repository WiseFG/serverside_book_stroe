<?php 
class CartModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function insert($userId,$bookId)
	{

		
		$query = $this->db->get('cart', array('userId' => $userId));
    	
    	$id;
    	foreach ($query->result() as $row)
		{
		       $id = $row->id;
		}


		$all = array(
				'bookId'=>$bookId,
		'cartId'=>$id,
	
		'counter'=>1
		
		);
		//print_r($all);
		$res=$this->db->insert('cartrow',$all);
	}


	function loadInfo($user)
	{

		 $sql = "SELECT * from user INNER JOIN cart on `user`.`id` = `cart`.`userId` INNER join cartrow on `cartrow`.`cartId`=`cart`.`id` INNER JOIN `book` ON
		`book`.`id` = `cartrow`.`bookId` WHERE `user`.`username` = '".$user."'";
    	
		$result = $this->db->query($sql);
		$post = array();
    	$i = 0;
    	foreach($result->result() as $rows)
    	{
    		$post [$i]["name"] = $rows->name;
    		$post [$i]["publisher"] = $rows->publisher;
			$post [$i]["writer"] = $rows->writer;
    		$post [$i]["publishedDate"] = $rows->publishedDate;
    		$post [$i]["category"] = $rows->category;
    		$post [$i]["price"] = $rows->price;
			$post [$i]["counter"] = $rows->counter;
			$i++;
    	}
    
    	echo json_encode($post);
	}

}
?>
