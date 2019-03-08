<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class contacto extends CI_Controller {
    public function __construct() {
        parent::__construct();       
    }

    public function contacto(){
        $this->load->view('main/header');
        $this->load->view('contacto/contacto');
        $this->load->view('main/footer');
    }

  
}