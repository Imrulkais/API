<?php

class ConfigController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->config->load('custom_config');
    }
    public function Config(){
        
        $this->load->view("configshow");
    }
    
}
