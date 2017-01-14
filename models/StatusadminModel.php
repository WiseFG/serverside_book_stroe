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
		$sql = "SELECT id FROM `invoice`
			 WHERE `delivered` =".$zero ;
    	$result = $this->db->query($sql);
    	$post[0]["invoiceID"]="dddd";
    	$i = 0;
    	foreach($result->result() as $rows)
    	{
    		$post[$i]["invoiceID"] = $rows->invoiceId;
    		$i++;
    		
    	}
    	echo json_encode($post);
	}

	
	function loadInfo($invoiceID)
	{
		$sql1 = "SELECT bookid, counter FROM `invoicerow` join
		`book` ON (`invoicerow`.`bookid`=`book`.`id`) 
			 WHERE `invoiceid` =". $invoiceID;
    	$result = $this->db->query($sql1);
    	$post= array();
    	$i = 0;
    	foreach($result->result() as $rows)
    	{
    		$bookID = $rows->invoiceId;
    		$sql2 = "SELECT * FROM `book` 
			 WHERE `id` =".$bookID;
    		$result2 = $this->db->query($sql2);
    		$post [$i]["photo"] = $rows->photo;
    		$post [$i]["publisher"] = $rows->publisher;
			$post [$i]["writer"] = $rows->writer;
    		$post [$i]["publishDate"] = $rows->publishDate;
    		$post [$i]["category"] = $rows->category;
    		$post [$i]["price"] = $rows->price;
			$post [$i]["count"] = $result;
			$i++;
    	}
    
    	echo json_encode($post);
	}
}
?>
