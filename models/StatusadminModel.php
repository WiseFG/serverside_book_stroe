<?php 
class StatusadminModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}


	function loadInfo()
	{

		$sql = "SELECT * FROM 'invoice' 
			 WHERE 'delivered' = 0";
    	$result = $this->db->query($sql);
    	echo json_encode( $result->result());
	}	


}
?>
