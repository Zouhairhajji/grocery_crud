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
        require_once(APPPATH . 'libraries' . DIRECTORY_SEPARATOR . 'Formulaire.php');
        require_once(APPPATH . 'formulaire' . DIRECTORY_SEPARATOR . $formulaire_name . '.php');
    }

}
