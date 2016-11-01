<?php

defined('BASEPATH') OR exit('No direct script access allowed');







$config['favicon_folder'] = "assets/img";
$config['css_folder'] = "assets/";
$config['js_folder'] = "assets/";
$config['images_folder'] = "assets/images/";




$config['prefix_style'] = '<style>';
$config['suffix_style'] = '</style>';


$config['prefix_script'] = '<script type="text/javascript">';
$config['suffix_script'] = '</script>';



$config['grocery_crud']['css'] = array();
$config['grocery_crud']['js'] = array();



$config['highcharts']['css'] = array();
$config['highcharts']['js'] = array();





        
$config['favicon'] = 'dist/img/favicon.ico';

 
            
$config['css_files'] = array(
    array(
        'file' => 'bootstrap.min.css',
        'folder' => 'admin-lte/bootstrap/css',
    ),
    array(
        'file' => 'font-awesome.min.css',
        'folder' => 'font-awesome/css',
    ),
    array(
        'file' => 'AdminLTE.min.css',
        'folder' => 'admin-lte/dist/css',
    ),
    array(
        'file' => '_all-skins.min.css',
        'folder' => 'admin-lte/dist/css/skins',
    ),
    
);





$config['js_top_files'] = array();







$config['js_down_files'] = array(
    
    array(
        'file' => 'jquery-2.2.3.min.js',
        'folder' => 'admin-lte/plugins/jQuery',
    ),
    array(
        'file' => 'bootstrap.min.js',
        'folder' => 'admin-lte/bootstrap/js',
    ),
    array(
        'file' => 'jquery.slimscroll.min.js',
        'folder' => 'admin-lte/plugins/slimScroll',
    ),
    array(
        'file' => 'fastclick.min.js',
        'folder' => 'admin-lte/plugins/fastclick',
    ),
    array(
        'file' => 'app.min.js',
        'folder' => 'admin-lte/dist/js',
    ),
    array(
        'file' => 'demo.js',
        'folder' => 'admin-lte/dist/js',
    ),
);








$config['custom_js'] = array(
    "function datatablesOptions() { var option = { 'orderClasses': false,  }; return option; }",
    'function afterDatatables() {  ""  }',
);


$config['custom_css'] = array(
    
    /*'body' => array(
        'background-color' => '#fae',
    ),
     * 
     */
);
