<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        //$this->load->view('welcome_message');
        
        $this->load->formulaire('authentification');
        $auth_form = new Authentification();
        
        
        if($auth_form->run() === TRUE){
            echo "form valid";
        }else{
            echo "form not valid";
        }
        
        
        $data['form_login'] = $auth_form->render_form();
        $this->load->view('Login', $data);
        
    }

}
