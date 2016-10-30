<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Formulaire
 *
 * @author zouhairhajji
 */
abstract class Formulaire {

    private static $with = 'form_';
    private static $with_label = ' : ';
    private static $name_resetButton = 'button_reset';
    private static $pefix_submitButton = 'submit_';
    
    private $data;
    
    private $array_component;
    private $button_submit;
    private $button_reset;
    private $forced_error;

    
    private $error_prefix = '<div class="error_prefix">';
    private $error_suffix = '</div>';
    
    private $cursor;
    
    public function __construct() {
        $this->array_component = array();
        $this->forced_error = array();
        $this->ci = & get_instance();
        $this->ci->load->helper('form');
        $this->ci->load->library('form_validation');
    }

    /**
     * 
     * @param array $type input, password ....
     */
    public function add_component($type, $name, $label, $placeHolder, $icon, $class, $validations) {
        $this->array_component[] = array(
            'label' => $label,
            'type' => $type,
            'icon' => $icon,
            'validation' => $validations,
            'code' => array(
                'id' => $name,
                'name' => $name,
                'class' => $class,
                'value' => set_value($name),
                'placeholder' => $placeHolder
            ),
        );
        
    }

    public function is_submitted() {
        if(isset($this->button_submit))
            return $this->ci->input->post($this->button_submit['name']) ? TRUE : FALSE;
        return false;
    }

    public function run($tolerated = FALSE) {
        foreach ($this->array_component as $componant) {
            $name = $componant['code']['name'];
            $label = ($componant['label'] == FALSE) ? $componant['label'] : $name;
            
            if($componant['validation'] ==! FALSE){
                $this->ci->form_validation->set_rules($name, $name, $componant['validation']);
            }else{
               $this->ci->form_validation->set_rules($name, $name); 
            }
        }
        if($this->ci->form_validation->run()){
            if($tolerated){
                return TRUE;
            }else{
                return empty($this->forced_error) ? TRUE : FALSE;
            }
        }else{
            return validation_errors();
        }
    }
    
    public function set_submit($name, $value){
        $this->button_submit = array(
            'name'  => self::$pefix_submitButton.$name,
            'value' => $value,
        );
    }
    
    public function set_reset($label){
        $this->button_reset = array(
            'name'  => self::$name_resetButton,
            'value' => $label,
        );
    }
    
    
    /**
     * La méthode permet d'ajoute une erreure personnalisée
     */
    public function force_error($error){
        $this->forced_error[] = $error;
    }
    
    
    public function init_cursor(){
        $this->cursor = 0;
    }
    
    public function next(){
        $this->cursor += 1;
    }
    
    
    
    
    public function render_submit(){
        return form_submit($this->button_submit);
    }
    
    public function render_reset(){
        return form_submit($this->button_reset);
    }
    
    /**
     * La méthode permet de retourner tous les erreurs de form_validation, ainsi que les custom errors
     */
    public function render_errors(){
        $errors = '';
        foreach ($this->forced_error as $error) {
            $errors .= $this->error_prefix.$error.$this->error_suffix;
        }
        $errors .= validation_errors($this->error_prefix, $this->error_suffix);
        return $errors;
    }
    
    
    public function get_data($name){
        return $this->data[$name];
    }
    
    public function get_all_data(){
        $this->data;
    }
    
    public function set_data($name, $value){
        $this->data[$name]= $value;
    }

    
    
    public function get_label(){
        $componant = $this->array_component[$this->cursor];
        if($componant["label"] ==! false){
            $label = $componant["label"].self::$with_label;
            return form_label($label);
        }else{
            return '';
        }
    }
    public function get_component(){
        $componant = $this->array_component[$this->cursor];
        $method = self::$with.$componant["type"];
        return $method($componant["code"]);
        
        
    }
    
    
    
    
    
    public abstract function render_form($url = FALSE);
}
