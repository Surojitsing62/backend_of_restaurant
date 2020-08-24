<?php
class Client_Panel_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function insertrecord($name,$email,$address,$phone,$pass)
	{
        $query="insert into userinfo values('','$name','$email','$address','$phone','$pass')";
		return $this->db->query($query);
	}
	public function logindatainsert($email,$pass)
	{
		$query=$this->db->query("SELECT * FROM userinfo WHERE user_email = '$email' AND user_password = '$pass' AND block='0'");  
       return $query->num_rows();
	}
	
}