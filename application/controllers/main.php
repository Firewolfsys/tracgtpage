<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


    public function __construct() {
        parent::__construct();            
    }
    public function index()
    {
        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $this->load->view('main/principal');
        $this->load->view('main/footer');
    }
}
