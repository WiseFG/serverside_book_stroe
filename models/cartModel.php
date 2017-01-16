<?php 
class CartModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}


	function loadInfo($user)
	{

		 $sql = "SELECT * from user INNER JOIN cart on `user`.`id` = `cart`.`userId` INNER join cartrow on `cartrow`.`cartId`=`cart`.`id` INNER JOIN `book` ON
		`book`.`id` = `cartrow`.`bookId` WHERE `user`.`username` = ". $user;
    	
		$result = $this->db->query($sql1);

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
