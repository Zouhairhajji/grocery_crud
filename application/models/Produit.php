<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produit
 *
 * @author zouhairhajji
 */
class Produit extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function get_all_produit(){
        $this->db->select('*');
        $this->db->from('produit p');
        return $this->db->get()->result();
    }
    
    
}
