<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sobre_nosotros extends CI_Controller {


    public function __construct() {
        parent::__construct();
    }
    public function quienesomos()
    {
        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $this->load->view('sobre_nosotros/quienesomos');
        $this->load->view('main/footer');
    }
}
