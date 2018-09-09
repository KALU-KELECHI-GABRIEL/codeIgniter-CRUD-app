<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_model extends CI_Model{

    public function index(){
        $this->load->view("shared/header");
        echo "this is a model";
        $this->load->view("shared/footer");
    }
 

    public function login_user($data1,$data2){
        $this->db->where($data1);
       
        $query =  $this->db->get('profile');

        if($query->num_rows() == 1){
            $this->db->where($data2);
            $query =  $this->db->get('profile');
            if($query->num_rows() == 1){
            return true; }
        } 
        else{return false;}
        //return $query->result_array();  

    }


        public function insert_data($data){
           
           $this->db->insert("profile", $data);
          // $query = $this->db->get_where("profile", $data['id']);
           //return $query; 

        }

        public function read_data($data){
           $query = $this->db->get_where('profile', $data);
           return $query->result_array();

        }

        public function fetch_dataw($dataw){
            $query = $this->db->get_where('profile', $dataw);
            return $query->result_array();
 
         }

         public function fetch_dataid($dataid){
            $query = $this->db->get_where('profile', $dataid);
            return $query->result_array();
 
         }
 


        public function delete_data($id){
           
           $this->db->where("id", $id);
           $this->db->delete("profile");
          echo "deleted oga!";
           // $query = $this->db->get_where("profile", $data['id']);
           //return $query; 
        }


        function fetch_data(){
            $query = $this->db->get('profile');
            return $query;
        }


        public function update_data($data,$id){
           
           //$this->db->insert("profile", $data);
          
           $this->db->where($id);
            $this->db->update('profile', $data); 

        }




}

?>