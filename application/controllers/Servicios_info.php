<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class servicios_info extends CI_Controller {
    public function __construct() {
        parent::__construct();       
    }

      public function logistica_transporte(){
        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $this->load->view('servicios/logistica_transporte');
        $this->load->view('main/footer');
    }

       public function nuestros_servicios(){
        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $this->load->view('servicios/nuestros_servicios');
        $this->load->view('main/footer');
    }

  
}