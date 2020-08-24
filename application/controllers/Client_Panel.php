<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Header:access");
header("Access-Control-Allow-Methods:POST,GET,DELETE,PUT,OPTIONS");
header("Content-Type: application/json ; charset-UTF-8");
header("Access-Control-Allow-Credentials" ,'true');
header("Access-Control-Allow-Header:Content-Type,Origin,Accept,Authorization,X-Requested-With");
header("HTTP/1-1 200 OK");

class Client_Panel extends CI_Controller{
  public function __construct()
  {
    parent:: __construct();
    $this->load->database();
    $this->load->model('Client_Panel_Model');
  }
  public function insertdata()
  {
    $data = json_decode(file_get_contents('php://input'));
    $userdata = $this->Client_Panel_Model->insertrecord($data->name,$data->email,$data->address,$data->phone,md5($data->pass));
    if($userdata)
    {
      echo json_encode(['success'=>1,'msg'=>'Register Successfull']);
    }else
    {
      echo json_encode(['success'=>0,'msg'=>'opss!! Register Unsuccessfully']);
    }
  }
  public function logindata()
  {
    $data = json_decode(file_get_contents('php://input'));
    $userdata = $this->Client_Panel_Model->logindatainsert($data->email,md5($data->pass));
    if($userdata>0)
    {
      echo json_encode(['success'=>1,'msg'=>'Login Successfull']);
    }else
    {
      echo json_encode(['success'=>0,'msg'=>'opss!! Login Unsuccessfully']);
    }
  }
  

}



?>