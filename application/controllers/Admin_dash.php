<?php

class Admin_dash extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_Model');
	}

    public function set($key , $value)
		{
			$_SESSION[$key] = $value;
		}

		public function loginpage()
		{
    $this->load->view('Admin/loginpage');
		}

	public function index()
	{
			if(isset($_SESSION['admin_id']))
			{
				$this->load->view('Admin/admin_dashboard');
			}
			else
			{
				$this->load->view('Admin/loginpage');
			}
		}

	


	public function login()
	{
		
		if($this->input->post('submit'))
		{
		         $email=$this->input->post('email');
       	         $pass=md5($this->input->post('pass'));
       	         $admin_details = $this->Admin_Model->getemailinfo($email,$pass);
                     
                     if($admin_details !=false)
                         {
                            // print_r($admin_details[0]->admin_name);

        	                 $this->Set('admin_id' , $admin_details[0]->admin_id);
					         $this->Set('admin_name', $admin_details[0]->admin_name);
					         $this->Set('admin_file', $admin_details[0]->admin_file);
					         
        	                 // redirect('Admin_dash/dashboard');
        	                 redirect(base_url().'Admin_dash/dashboard/'.$admin_details[0]->admin_id);

                          }
                           else
                               {
        	                     
                               	echo "<script>alert('login falid')</script>";
                                }
        }
        else
        {
        	 $this->index();
        }
	}


         function admindashboard()
         {
           if(isset($_SESSION['admin_id']))
      		{    	        
		         // $admin_data['menu_id'] = "dashboard"; 
		        // print_r($_SESSION['admin_id']);       
		        $this->load->view('Admin/admin_dashboard');
      		}
      		else
      		{
       			$this->NeedToLoginFirst();   
      		}
         }
	  
	     function dashboard($admin_id)
	    {        
	      // print_r($admin_id);
	      $admin_detail = $this->Admin_Model->getrecordofadmin($admin_id);
	      
	      if($admin_detail != false)
	      {
	        if($_SESSION['admin_id'] == $admin_id)
	        {
	        	// echo $admin_id ;
	          redirect(base_url().'Admin_dash/admindashboard');
	        }
	        else
	        {
	          redirect(base_url().'Admin_dash/index');
	        }
	      }
	      else
	      {          
	        redirect(base_url().'Admin_dash/index');
	      }
	    }

	    function NeedToLoginFirst()
	    {
           echo "<script> alert('Login first for any further activity') </script>";          
      		echo "<script> window.location.href='".base_url()."Admin_dash/login/' </script>";
	    }


        public function logout()
        {
	       session_destroy();
		    echo "<script> window.location.href='".base_url()."Admin_dash/index/' </script>";
        }



	    public function register()
	    {
                   $this->load->view('Admin/registerpage');
                   if($this->input->post('submit'))
                     {
      	                $n=$this->input->post('username');
      	                $e=$this->input->post('email');
      	                $p=$this->input->post('phone');
      
      	                $pas=md5($this->input->post('pass'));

      	                //file upload
                        $config['upload_path'] = './image';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = 1000000;
                        $config['max_width'] = 1024;
                        $config['max_height'] = 768;

                        $this->load->library('upload',$config);
                        $this->upload->do_upload('user_file');

                        $data=array('image_metadata' => $this->upload->data());
                        $info = $this->upload->data();

                        $image_path = base_url("image/".$info['raw_name'].$info['file_ext']);

       

                           if($n!='' && $e!='' && $p!=''  && $pas!='')
                              {
      	                         $this->Admin_Model->insertrecord($n,$e,$p,$image_path,$pas);
      	                         //echo "Data insert sucessfully";
      	                         echo "<script>alert('Register successfully')</script>";
      	                         redirect('Admin_dash/login');
                               } 
                                else
                                    {

          	                          echo "<script>alert('All Filed required')</script>";
          	                        
                                     }
	                 }
         }

         public function viewrecordofadmin()
	     { 
            if(isset($_SESSION['admin_id']))
            {
		    $result['data']=$this->Admin_Model->getrecordofadmin();
		   if($result !=false)
		   {
		   $this->load->view('Admin/displayrecord',$result);

		   // echo "<script>alert('record fetched')</script>";
		}else
		{
		  redirect(base_url().'Admin_dash/admindashboard');	
		}
		    }else
		    {
			$this->NeedToLoginFirst();
		    }
		
	     }

	     public function displayrecordofuser()
	     {
            
               if(isset($_SESSION['admin_id']))
             {
		       $result['data']=$this->Admin_Model->getrecordofuser();
		       if($result !=false)
		        {
		          $this->load->view('Admin/userdetails',$result); 
                }
                else
                {
              	echo "<script> alert('No Record Found') </script>";
                }
            }

             else
             {
                  $this->NeedToLoginFirst();
             }
           
       }



        public function BlockUser()
        {
        	if(isset($_SESSION['admin_id']))
        	{
             $id=$this->input->get('id');
             $result=$this->Admin_Model->DoblockUser($id);
               if($result !=false)
               {
             	// echo "<script> alert('Block Successfully') </script>";
             	$this->displayrecordofuser(); 
                
               }
               else
                 {
                  echo "<script> alert('Unable to Block') </script>";
            
                }
            }

            else
               {
         	    $this->NeedToLoginFirst();
               }
        }

        public function UnBlockUser()
        {
        	
          if(isset($_SESSION['admin_id']))
        	{
             $id=$this->input->get('id');
             $result=$this->Admin_Model->DoUnblockUser($id);
               if($result !=false)
               {
             	// echo "<script> alert('Block Successfully') </script>";
             	$this->displayrecordofuser(); 
                
               }
               else
                 {
                  echo "<script> alert('Unable to UnBlock') </script>";
            
                }
            }

            else
               {
         	    $this->NeedToLoginFirst();
               }

        }
  
}

?>