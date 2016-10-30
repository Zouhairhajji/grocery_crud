<?php

/**
 * Description of My_Loader
 *
 * @author zouhairhajji
 */
class My_Loader extends CI_Loader {

    public function __construct() {
        parent::__construct();
    }

    public function formulaire($formulaire_name) {
        parent::library('Formulaire');
        require_once(APPPATH . 'formulaire' . DIRECTORY_SEPARATOR . $formulaire_name . '.php');
    }

}
