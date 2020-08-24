<?php

class Admin_Model extends CI_Model

{
	public function __construct()
		{
			parent::__construct();
		}

	public function insertrecord($name,$email,$phone,$img_file,$pass)
	{
		$query="insert into admininfo values('','$name','$email','$phone','$img_file','$pass')";
		$this->db->query($query);
	}


    public	function getemailinfo($email, $pass)  
      {  
            
        $query=$this->db->query("SELECT * FROM admininfo WHERE admin_email = '$email' AND admin_password = '$pass'");  
       if($query->num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
    }

    public function getrecordofadmin()
	{
		$data=$this->db->query("SELECT * FROM admininfo");
		 if($data->num_rows() >0 )
        {
        	return $data->result();
           
        }  
        else
           {
      	     return false;
            }
	}
	public function getrecordofuser()
	{
 	    $qry=$this->db->get('userinfo');
 	    if($qry->num_rows() >0)
 	   {
	    return $qry->result();
       }
        else
       {
        return false;
       }
    }

    public function DoblockUser($id)
    {
    	$query=$this->db->query("UPDATE userinfo SET block=1 WHERE id='$id'");
    	if($query >0)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }


   public function DoUnblockUser($id)
   {
   	$query=$this->db->query("UPDATE userinfo SET block=0 WHERE id='$id'");
    	if($query >0)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
   }
}

?>