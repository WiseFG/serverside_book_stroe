<?php 
class LoginModel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}


	function registration($user_data)
	{
		$all = array(
		'name'=>$user_data['reg_name'],
		'fname'=>$user_data['reg_fname'],
		'phoneNumber'=>$user_data['reg_tel'],
		'username'=>$user_data['reg_user'],
		'password'=>$user_data['reg_pass'],	
		'address'=>$user_data['reg_address'],
		'email' => $user_data['reg_mail']
		);
		//print_r($all);
		$res=$this->db->insert('user',$all);
		return $res;
	}
	function setCart($user_data)
	{
		
		$username=$user_data['reg_user'];
		$sql = "SELECT id FROM `user`
			 WHERE `username` ='".$username ."'";
		$query = $this->db->get('user', array('username' => $username));
    	
    	$id;
    	foreach ($query->result() as $row)
		{
		       $id = $row->id;
		}

		
		$all = array(
		'userId'=>$id);
		$res=$this->db->insert('cart',$all);
		return $res;

	}

	


}
?>
