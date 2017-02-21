<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function denglu()
    {
        $this->load->view('login.php');
    }
    
    public function admin_login()
    {
        $this->load->database();
        
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $capatch = $this->input->post('capatch');
        $query = $this->db->query("SELECT * FROM users");
      
        echo '<pre>';
        var_dump($query);
        echo '</pre>';
        
        if ($query)
        {
            $this->load->view('index.php');
        }else {
            $this->load->view('login.php');
        }
        
    }
}
