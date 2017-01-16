<?php 
class StatusadminModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

    function cancelPay($userId)
    {
        $invoiceId = selectInvoiceId($userId);
        deletInvoiceRow($invoiceId);
        deletInvoice($userId);
    
    }
	function selectInvoiceId($userId)
	{
		$zero=0;
		$sql = "SELECT id FROM `invoice`
			 WHERE `userId` =".$userId ;
    	$result = $this->db->query($sql);
    	$invoiceId ;

    	foreach($result->result() as $rows)
    	{
    		$invoiceId = $rows->id;
    	}
    	return $invoiceId;
    }

	
	function deletInvoiceRow($invoiceID)
	{
		 $sql = "DELETE FROM `invoicerow` WHERE invoiceId = ". $invoiceID;
        $result = $this->db->query($sql);
       
	}

    function deletInvoice($invoiceID)
    {
        $sql = "DELETE FROM `invoice` WHERE userId = ". $invoiceID;
        $result = $this->db->query($sql);
       
    }

}
?>
