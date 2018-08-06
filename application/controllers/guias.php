<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guias extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('main');
        } else {
            //$this->load->model('facturacion/tipodoctos_model');
        }        
    }

    public function index()
    {
        $this->load->view('main/header');
        $this->load->view('guias/guias_lista');
        $this->load->view('main/footer');
    }

    public function ver($id){
        $this->datos['vista'] = "facturacion/tipo_doctos/ver";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo()
    {
        $this->load->view('main/header');
        $this->load->view('guias/nuevo');
        $this->load->view('main/footer');

    }

    public function guardar($id){
        $this->datos['vista'] = "facturacion/tipo_doctos/guardar";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_por_id($id);
        $this->load->view('main/principal', $this->datos);
    }

     public function guardar_post($id=null){
        if($this->input->post()){
           $descripcion = $this->input->post('descripcion');
           $this->tipodoctos_model->guardar($descripcion, $id);
           redirect('facturacion/tipo_doctos');
        }else{
           $this->guardar();
        } 
     }

  
}
     
