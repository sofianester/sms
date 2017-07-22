<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
    }

    public function index() {
        $this->load->view('inc/header');
        $this->load->view('pages/dashboard');
        $this->load->view('inc/footer');
    }
}
