<?php

class CSRFController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }

    public function Csrf() {

        $rand = random_string('unique');
        $now['token'] = $rand;

        $this->session->set_userdata('now', $rand);
        $this->load->view("csrfshow", $now);
    }

    public function Csrfinsert() {

        $token = $this->input->post('token');
        $session = $this->session->userdata('now');
        if ($session == $token) {
            echo "yes got it";
        }
    }

}
