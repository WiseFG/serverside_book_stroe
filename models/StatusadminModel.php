<?php 
class StatusadminModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}


	function loadInvoiceID()
	{
		$zero=0;
		$sql = "SELECT id FROM `cart`";
    	$result = $this->db->query($sql);
    	$i = 0;

    	foreach($result->result() as $rows)
    	{
    		$post[$i]["invoiceID"] = $rows->id;
    		$i++;
    		
    	}
    	echo json_encode($post);
	}

	
	function loadInfo($invoiceID)
	{
		$sql1 = "SELECT bookId,`cartrow`.counter FROM `cartrow` join
		`book` ON (`cartrow`.`bookid`=`book`.`id`) 
			 WHERE `cartId` =". $invoiceID;
    	$result = $this->db->query($sql1);
    	$post= array();
    	$i = 0;
    	foreach($result->result() as $rows)
    	{
    		$bookID = $rows->bookId;
            $bookIDInt = (int)$bookID;

    		$sql2 = "SELECT * FROM `book` 
			 WHERE `id` =" .$bookIDInt;
    		$result2 = $this->db->query($sql2);
            foreach($result2->result() as $r)
            {
    		  $post [$i]["name"] = $r->name;
    		  $post [$i]["publisher"] = $r->publisher;
			  $post [$i]["writer"] = $r->writer;
    		  $post [$i]["publishedDate"] = $r->publishedDate;
    		  $post [$i]["category"] = $r->category;
    		  $post [$i]["price"] = $r->price;
			  $post [$i]["counter"] = $rows->counter;
            }
            $i++;

    	}
    
    	echo json_encode($post);
	}

    function loadPlace($invoiceID)
    {
        $sql = "SELECT place, sts FROM `invoice`
             WHERE `id` =". $invoiceID;
        $result = $this->db->query($sql);
        $post= array();
        $i = 0;
        foreach($result->result() as $rows)
        {
              $post [$i]["place"] = $rows->place;
              $post [$i]["sts"] = $rows->sts;
    
            $i++;

        }
    
        echo json_encode($post);
    }

    function updateInfo($place,$status,$invoiceID)
    {
        $new_id = (int)$invoiceID;
        $sql="UPDATE cart SET  place = '".$place."' ,sts = '".$status."' WHERE id=" .$new_id; 
        $result = $this->db->query($sql);
    }
}
?>
