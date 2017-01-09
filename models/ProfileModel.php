<?php 
class ProfileModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}


	function loadInfo($user)
	{

		 $sql = "SELECT * FROM `user` 
			 WHERE `username` = '". $user ."'";
    	$result = $this->db->query($sql);
    	echo json_encode( $result->result());
    
	}

	function updateInfo($username,$name,$fname,$address,$email,$tel)
	{
		$sql='UPDATE user SET  name = "'.$name.'" ,fname = "'.$fname .'",email = "'.$email .'",address = "'.$address .'" ,phoneNumber = "'.$tel.'" WHERE username = "'.$username .'"'; 
	    $result = $this->db->query($sql);
	    
		
	}
	


}
?>