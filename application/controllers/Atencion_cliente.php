<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class atencion_cliente extends CI_Controller {
    public function __construct() {
        parent::__construct();       
    }

    public function articulos_prohibidos(){
        $this->load->view('main/header');
        $this->load->view('atencion_cliente/articulos_prohibidos');
        $this->load->view('main/footer');
    }

    public function manual_empaque(){
        $this->load->view('main/header');
        $this->load->view('atencion_cliente/manual_empaque');
        $this->load->view('main/footer');
    }

    public function proceso_reclamos(){
        $this->load->view('main/header');
        $this->load->view('atencion_cliente/proceso_reclamos');
        $this->load->view('main/footer');
    }
  
}