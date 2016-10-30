<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acceuil
 *
 * @author zouhairhajji
 */
class Acceuil extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function index(){
        $this->load->view('index');
    }
    
    public function db_1(){
        $this->load->model('Produit');
        $produit = new Produit();
        $allProd = $produit->get_all_produit();
        $data['products'] = $allProd;
        $this->load->view('list_all_prod', $data);
    }
    
    public function inscription(){
        
        if($this->input->post('btn_envoyer')){
            echo "votre nom est ". $this->input->post('nom'). "<br />";
            echo "votre prenom est ". $this->input->post('prenom'). "<br />";
            echo "votre age est ". $this->input->post('age'). "<br />";
            echo "votre pseudo est ". $this->input->post('pseudo'). "<br />";
            echo "votre psw est ". $this->input->post('motdepasse'). "<br />";
            echo "merci pour votre inscription";
        }else{
             $this->load->view('inscription');
        }
        
       
    }
    
}
