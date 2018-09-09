<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller{
public $log;
public function __construct(){
  parent::__construct();
  $this->load->helper("url");
  $this->load->model('main_model');
}
 
  //public static $id = 0; 


public function index(){
 echo "yes o yes";
 $log = array("login_message" => "");
$this->load->view("shared/header");
$this->load->view("loginpage",$log);
$this->load->view("shared/footer");


}



public function register(){
  echo "yes o yes";

 $this->load->view("shared/header");
 $this->load->view("registeration");
 $this->load->view("shared/footer");
 
 
 }




public function index2($data1){
  echo "yes o yes";
 // $this->load->model("main_model");
 // $this->main_model->index();
 //$this->load->model("main_model");
 //$data["read_data"] = $this->main_model->read_data();
 $this->load->view("shared/header");
 $this->load->view("main_view",$data1);
 $this->load->view("shared/footer");
}



public function index3(){
  
 $this->load->view("shared/header");
 $this->load->view("main_view");
 $this->load->view("shared/footer");
}
 



// LOGIN METHODS OPEN

public function login_validation(){
 
 $this->load->library("form_validation");


 $this->form_validation->set_rules("id", "EMPLOYEE ID", 'trim|required');
 $this->form_validation->set_rules("pswd", "PASSWORD", 'trim|required');

if( $this->form_validation->run()){
echo "this ran well";
 $this->load->model("main_model");
 
 $data1 = array(
   "id"           =>$this->input->post("id"),
   //"password"     =>$this->input->post("pswd")
   
 );
 $data2 = array(
  //"id"           =>$this->input->post("id"),
  "password"     =>$this->input->post("pswd")
  
);
 $result = $this->main_model->login_user($data1,$data2);
 if($result==true){
 echo " this is ran well";
 $log = array("login_message" => FALSE);
 $data1['read_data'] = $this->main_model->read_data($data1);
$this->index2($data1);
}
 else{
   $log = array("login_message" => TRUE);
   $this->load->view("shared/header");
$this->load->view("loginpageclone",$log);
$this->load->view("shared/footer");

}
}
else{$this->index();}
 }



 public function password_generation(){
 
  $this->load->library("form_validation");
 
 
  $this->form_validation->set_rules("id", "EMPLOYEE ID", 'trim|required');
  $this->form_validation->set_rules("id", "PASSWORD", 'trim|required');
 
 if( $this->form_validation->run()){
 echo "this ran well";
  $this->load->model("main_model");
  
  $data = array(
    "email"     =>$this->input->post("pswd"),
    "id"        =>$this->input->post("id")
    
  );
  
  $this->main_model->gen_password($data);
 
 
 redirect(base_url("main/index"));
 }
 else{$this->index();}
  }


  public function login_checkid($requested_id){
    $this->load->model("main_model");
    $id_passed = $this->main_model->fetch_check1($requested_id);
    if($id_passed){
      return TRUE;
    }
      else{ 
        return FALSE;
      }

  }

  public function login_checkpswd($requested_pswd){
    $this->load->model("main_model");
    $pswd_passed = $this->main_model->fetch_check($requested_pswd);
    if($pswd_passed){
      return TRUE;
    }
      else{ 
        return FALSE;
      }

  }



  public function form_validation(){
    echo "yes o yes";
  
   $this->load->library("form_validation");

   $this->form_validation->set_rules("name", "NAME/NICKNAME", 'required');
   $this->form_validation->set_rules("id", "EMPLOYEE ID", 'required');
   $this->form_validation->set_rules("area", "SPECIALTY", 'required|alpha');
   $this->form_validation->set_rules("phone", "PHONE NUMBER", 'required');
   $this->form_validation->set_rules("email", "EMAIL", 'required');
   $this->form_validation->set_rules("pswd", "PASSWORD", 'trim|required');
   $this->form_validation->set_rules("pswd2", "PASSWORD", 'trim|required|matches[pswd]');
if( $this->form_validation->run()){
  echo "this ran well";
   $this->load->model("main_model");
   
   $data = array(
     "name"         =>$this->input->post("name"),
     "id"           =>$this->input->post("id"),
     "specialty"    =>$this->input->post("area"),
     "phone_num"    =>$this->input->post("phone"),
     "email"        =>$this->input->post("email"),
     "password"     =>$this->input->post("pswd") 
   );
   
   $this->main_model->insert_data($data);
  
   


  redirect(base_url("main/after_insertion"));
}
else{$this->insertfail();}
   }
  




// INSERTION METHODS OPEN

public function register_validation(){
    echo "yes o yes";
  
   $this->load->library("form_validation");

   $this->form_validation->set_rules("name", "NAME/NICKNAME", 'required');
   $this->form_validation->set_rules("id", "EMPLOYEE ID", 'required');
   $this->form_validation->set_rules("area", "SPECIALTY", 'required|alpha');
   $this->form_validation->set_rules("phone", "PHONE NUMBER", 'required');
   $this->form_validation->set_rules("email", "EMAIL", 'required');
   $this->form_validation->set_rules("pswd", "PASSWORD", 'trim|required');
   $this->form_validation->set_rules("pswd2", "PASSWORD", 'trim|required|matches[pswd]');
if( $this->form_validation->run()){
  echo "this ran well";
   $this->load->model("main_model");
   
   $data = array(
     "name"         =>$this->input->post("name"),
     "id"           =>$this->input->post("id"),
     "specialty"    =>$this->input->post("area"),
     "phone_num"    =>$this->input->post("phone"),
     "email"        =>$this->input->post("email"),
     "password"     =>$this->input->post("pswd") 
   );
   $dataw = array(
    "name"         =>$this->input->post("name"));
    $dataid = array(
      "id"         =>$this->input->post("id"));
   $datad = $this->main_model->fetch_dataw($dataw);
   $datar = $this->main_model->fetch_dataid($dataid);
   if(!$datad || !$datar){ echo "new now";
            echo " new ee";
   $this->main_model->insert_data($data);
   redirect(base_url("main/after_insert"));
   }

  
  else{$this->load->view('shared/header');
    $this->load->view('registeration');$this->load->view('shared/footer');}
}
else{$this->insertfail();}
   }
  
   


   public function after_insert(){
   
   $this->index();
   
   }

   public function after_insertion(){
   
    $this->index2();
    
    }
 

   public function insertfail(){
    //echo "yes o yes";
   // $this->load->model("main_model");
   $this->load->view("shared/header");
$this->load->view("registeration");
$this->load->view("shared/footer");

   
   }
















   //INSERTION METHODS CLOSE


   //DELETE METHODS OPEN

   public function delete(){
    //echo "yes o yes";
   // $this->load->model("main_model");
   $this->load->view('shared/header');
   $this->load->view('deletepage');
   $this->load->view('shared/footer');
   
   }



   public function delete_form_handler(){
    echo "yes o yes";
    $this->load->library("form_validation");

    $this->form_validation->set_rules("id", "EMPLOYEE ID", 'required', "oga ! this field is required");
   
 if( $this->form_validation->run()){
   echo "this ran well";
    $this->load->model("main_model");
    
    $id = $this->input->post("id");
    
    $this->main_model->delete_data($id);
    
   redirect(base_url("main/after_delete"));
   }

   else{$this->delete();}
   }



   public function after_delete(){
    //echo "yes o yes";
   // $this->load->model("main_model");
   $this->load->view("shared/header");
   $this->load->view("main_view");
   $this->load->view("shared/footer");
   
   }

   //DELETE METHODS CLOSED




   //READ METHODS OPEN

   public function read(){
   
    echo "yes o yes";
   // $this->load->model("main_model");
   $this->load->view('shared/header');
   $this->load->view('readpage');
   $this->load->view('shared/footer');
   
   }
  
   public function read_form_handler(){
    echo "yes handling";
    $this->load->library("form_validation");

    $this->form_validation->set_rules("id", "EMPLOYEE ID", 'required');
   
 if( $this->form_validation->run()){
   echo "this ran well";
    $this->load->model("main_model");
    
    $data = array(
  
        "id"    =>$this->input->post("id")
    );
   
    $data['read_data'] = $this->main_model->read_data($data);
    
    $this->load->view('shared/header');
    $this->load->view('afterread',$data);
    $this->load->view('shared/footer');
    
   }
   else{  $this->read();}
  }

  public function after_read(){
    //echo "yes o yes";
  //$this->load->model("main_model");
  //$id = $this->input->post("id");
   
  //$returned= $this->main_model->read_data($id);

   
    $this->load->view('shared/header');
   $this->load->view('readpage');
   $this->load->view('shared/footer');
    
   
   }
     //READ METHODs CLOSED

     

   //   UPDATE  SEQUENCE

   public function before_update(){
   
    echo "MODELS PAGE";
   // $this->load->model("main_model");
   $this->load->view('shared/header');
   $this->load->view('readpage');
   $this->load->view('shared/footer');
   
   }


   public function updater(){
   
    echo "MODELS PAGE";
   // $this->load->model("main_model");
   $this->load->view('shared/header');
   $this->load->view('updatepage');
   $this->load->view('shared/footer');
   
   }


   public function update_form_handler(){
    echo "MY DACISIONS ARE PENDING ON YOU";
   // $this->load->model("main_model");
   // $this->main_model->index();
   $this->load->library("form_validation");

   $this->form_validation->set_rules("name", "NAME/NICKNAME");
   $this->form_validation->set_rules("id", "EMPLOYEE ID", 'required');
   $this->form_validation->set_rules("area", "SPECIALTY", 'alpha');
   $this->form_validation->set_rules("phone", "PHONE NUMBER");
   $this->form_validation->set_rules("email", "EMAIL");
if( $this->form_validation->run()){
  echo "JUST CHILLING";
   $this->load->model("main_model");
   

   // these lines will check if the field was actually updated by the user, if not it won"t pass anything new into the field.

   if($this->input->post("name") !== ""){$data = array(
    "name"         =>$this->input->post("name"),
  );
}


if($this->input->post("id") !== ""){$data = array(
  "id"         =>$this->input->post("id"),
);
}

if($this->input->post("area") !== ""){$data = array(
  "specialty"         =>$this->input->post("area"),
);
}
if($this->input->post("phone") !== ""){$data = array(
  "phone_num"         =>$this->input->post("phone"),
);
}
if($this->input->post("email") !== ""){$data = array(
  "email"         =>$this->input->post("email"),
);
}

if($this->input->post("pswd") !== ""){$data = array(
  "password"         =>$this->input->post("pswd"),
);
}

$id = array(

  "id"           =>$this->input->post("id") 
);
   /*$data = array(
     "name"         =>$this->input->post("name"),
     "id"           =>$this->input->post("id"),
     "specialty"    =>$this->input->post("area"),
     "phone_num"    =>$this->input->post("phone"),
     "email"        =>$this->input->post("email"),
     
   );*/
   
   $this->main_model->update_data($data,$id);
  
   


  redirect(base_url("main/after_update"));
}
else{$this->updater();}
   }
   
   public function after_update(){
   
    echo "after update PAGE";
   // $this->load->model("main_model");
   $this->load->view('shared/header');
   $this->load->view('main_view');
   $this->load->view('shared/footer');
   
   }

   
   public function forgot_password(){
   
   // $this->load->model("main_model");
   $this->load->view('shared/header');
   $this->load->view('passwordretrieval');
   $this->load->view('shared/footer');
   
   }

public function password_generator(){
$this->load->library('form_validation');

$this->form_validation->set_rules("id", "EMPLOYEE ID", 'required');
$this->form_validation->set_rules("email", "EMAIL", 'required');
if( $this->form_validation->run()){
  
   $this->load->model("main_model");
   
   $data1 = array(
     "id"           =>$this->input->post("id"),
     "email"        =>$this->input->post("email")
   );

   $id = array("id"      =>$this->input->post("id"));
   

   $ide=$data1["id"];
   $ne = $data1["email"];
   $pass= str_replace("@","$ide","$ne");
   $pass= str_replace("mail","pj","$pass");
   $pass= str_replace(".com","","$pass");
   $newpassword = trim("$pass");
  
   $data = array("password"       => $newpassword);
   
   $this->main_model->update_data($data,$id);
   $this->load->view("shared/header");
  $this->load->view("loginpage", $data);
  $this->load->view("shared/footer");
   
   


  //redirect(base_url("main/after_insert"));
}
else{$this->insertfail();}
}
   
}



?>