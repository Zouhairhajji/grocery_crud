<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Authentification
 *
 * @author zouhairhajji
 */
class Authentification extends Formulaire{
    
    
    public function __construct() {
        parent::__construct();
        
        $this->ci = get_instance();
        
        $this->add_component('input', 'pseudo', FALSE, 'Pseudo', FALSE, 'form-control', 'required');
        $this->add_component('password', 'password', FALSE, '', FALSE, 'form-control', 'required');
        $this->force_error('Le compte  existe pas');
        
        $this->set_submit('authentification', 'Se connecter');
        $this->set_reset('Initialiser');
    }
    
}
