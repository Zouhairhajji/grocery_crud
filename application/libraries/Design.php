<?php

defined('BASEPATH') OR exit('No direct script access allowed');


define('config_file', 'Design');

class Design {

    private static $instance;
    private $CI;

    public function __construct() {
        if (isset(self::$instance)) {
            return;
        }

        self::$instance = $this;
        $this->CI = & get_instance();
        $this->CI->load->config(config_file);
    }

    /**
     * 
     * Ajout d'un script css 
     * 
     * @param string $name_file  
     * @param string $folder_css 
     * @param int $position La position du css qu'on doit rajouter False => à la fin
     */
    public function add_css($name_file, $folder_css = '') {
        
        $css_files = $this->CI->config->item('css_files');
        $new_css_file = array(
            'file' => $name_file,
            'folder' => $folder_css,
        );
        $css_files[] = $new_css_file;
        
        $this->CI->config->set_item('css_files', $css_files);
    }

    /**
     * 
     * Ajout d'un script top js 
     * 
     * @param string $name_file  
     * @param string $folder_js 
     * @param int $position La position du css qu'on doit rajouter False => à la fin
     */
    public function add_top_js($name_file, $folder_js = '') {
        
        $js_files = $this->CI->config->item('js_top_files');
        $new_js_file = array(
            'file' => $name_file,
            'folder' => $folder_js,
        );
        $js_files[] = $new_js_file;
        
        $this->CI->config->set_item('js_top_files', $new_js_file);
    }
    
    
    /**
     * 
     * Ajout d'un script down js 
     * 
     * @param string $name_file  
     * @param string $folder_js 
     * @param int $position La position du css qu'on doit rajouter False => à la fin
     */
    public function add_down_js($name_file, $folder_js = '') {
        
        $js_files = $this->CI->config->item('js_down_files');
        $new_js_file = array(
            'file' => $name_file,
            'folder' => $folder_js,
        );
        $js_files[] = $new_js_file;
        
        $this->CI->config->set_item('js_down_files', $new_js_file);
    }
    
    
    
    /**
     * 
     * Ajout d'un script          personalise 
     * 
     * @param string $script 
     */
    public function add_custom_js( $script ) {
        $custom_js = $this->CI->config->item('custom_js');
        $custom_js[] = $script;
        
        $this->CI->config->set_item('custom_js', $custom_js);
    }
    
    
    
    
    public function render_css() {
        $css_files = get_instance()->config->item('css_files');
        $css_folder = $this->CI->config->item('css_folder');

        $script_css = "";
        foreach ($css_files as $css_file) {
            if (isset($css_file['folder'])) {
                $script_css .= link_tag($css_folder . '/' . $css_file['folder'] . '/' . $css_file['file']);
            } else {
                $script_css .= link_tag($css_folder . '/' . $css_file['file']);
            }
        }
        return $script_css;
    }

    

    /**
     * @param string $style  
     */
    public function render_js_top() {
        $js_files = $this->CI->config->item('js_top_files');
        $js_folder = $this->CI->config->item('js_folder');

        $script_js = "";
        foreach ($js_files as $js_file) {
            if (isset($js_file['folder'])) {
                $script_js .= script_tag($js_folder . '/' . $js_file['folder'] . '/' . $js_file['file']);
            } else {
                $script_js .= script_tag($js_folder . '/' . $js_file['file']);
            }
        }
        return  $script_js;
    }

    /**
     * @param string $style  
     */
    public function render_js_down() {
        $js_files = $this->CI->config->item('js_down_files');
        $js_folder = $this->CI->config->item('js_folder');

        $script_js = "";
        foreach ($js_files as $js_file) {
            if (isset($js_file['folder'])) {
                $script_js .= script_tag($js_folder . '/' . $js_file['folder'] . '/' . $js_file['file']);
            } else {
                $script_js .= script_tag($js_folder . '/' . $js_file['file']);
            }
        }
        return $script_js;
    }

    public function render_custom_js() {
        $custom_js = $this->CI->config->item('custom_js');
        $prefix_js = $this->CI->config->item('prefix_script');
        $suffix_js = $this->CI->config->item('suffix_script');


        $script_js = "";
        foreach ($custom_js as $js) {
            $script_js .= $prefix_js . $js . $suffix_js;
        }
        echo $script_js;
    }

    public function render_custom_css() {
        $custom_css = $this->CI->config->item('custom_css');
        $prefix_css = $this->CI->config->item('prefix_style');
        $suffix_css = $this->CI->config->item('suffix_style');


        $script_css = "";
        foreach ($custom_css as $component => $css_component) {
            $script_css .= "$component {";
            // la balise est css, on parcours tous les sous array
            foreach ($css_component as $key => $css) {
                $script_css .= "$key: $css;";
            }
            $script_css .= "}";
            //$script_css .= $prefix_css.$css.$suffix_css;
        }
        $script_css = $prefix_css . $script_css . $suffix_css;
        return $script_css;
    }

    
    /**
     * POUR GROCERY CRUD
     * POUR GROCERY CRUD
     * POUR GROCERY CRUD
     * POUR GROCERY CRUD
     */
    public function render_grocerycrud_css(){
        $grocery_crud = $this->CI->config->item('grocery_crud');
        $res = "";
        foreach ($grocery_crud['css'] as $css){
            $res .= link_tag($css);
        }
        return $res;
    }
    
    public function render_grocerycrud_js(){
        $grocery_crud = $this->CI->config->item('grocery_crud');
        $res = "";
        foreach ($grocery_crud['js'] as $js){
            $res .= script_tag($js);
        }
        return $res;
    }
    
    public function add_grocerycrud_css($css_files){
        $grocery_crud = $this->CI->config->item('grocery_crud');
        $grocery_crud['css'] = array();
        foreach ($css_files as $css){
            $grocery_crud['css'][] = $css;
        }
        $this->CI->config->set_item('grocery_crud', $grocery_crud);
    }
    
    public function add_grocerycrud_js($js_files){
        $grocery_crud = $this->CI->config->item('grocery_crud');
        $grocery_crud['js'] = array();
        foreach ($js_files as $js){
            $grocery_crud['js'][] = $js;
        }
        $this->CI->config->set_item('grocery_crud', $grocery_crud);
    }
    
    
    
    
    // Icon Site
    public function render_icone(){
        $ico_url = $this->CI->config->item('favicon');
        $ico_folder = $this->CI->config->item('favicon_folder');
        return link_tag($ico_folder.'/'.$ico_url, 'shortcut icon', 'image/ico');
    }
    
    
    
    
    /**
     * @return Design
     */
    public static function &instance() {
        if (!self::$instance) {
            self::$instance = new Loader();
        }

        return self::$instance;
    }
    
    
    
   

}
