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
class Authentification extends Formulaire {

    public function __construct() {
        parent::__construct();
    }

    public function init_form() {
        $this->add_component('input', 'pseudo', '', 'Pseudo', array('multiple' => 'multiple'), 'fa-user', 'required');
        $this->add_component('password', 'password', '', 'Password', array('multiple' => 'multiple'), 'fa-user', 'required');

        $this->set_submit('login', 'Se connecter');
        $this->set_reset('Initialiser');
    }

    public function render_form($url = FALSE) {
        $script = '';
        $script .= form_open();

        $script .= div_open('');
        $script .= $this->render_errors();
        $script .= div_close();

        $this->init_cursor();
        $script .= div_open('');
        $script .= $this->get_label();
        $script .= $this->get_component();
        $script .= div_close();


        $this->next();
        $script .= div_open('');
        $script .= $this->get_label();
        $script .= $this->get_component();
        $script .= div_close();


        // ajout des buttons submit
        $script .= div_open('');
        $script .= $this->render_submit();
        $script .= div_close();

        // ajout des buttons submit
        $script .= div_open('');
        $script .= $this->render_reset();
        $script .= div_close();

        $script .= form_close();
        return $script;
    }

   
public function username_check(){
       return TRUE;
   }
}
