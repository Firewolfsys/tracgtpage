<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class servicios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        } else {
            $this->load->model('servicios_model');
        }        
    }


      public function costo_servicio_cliente($id_cliente, $id_servicio){
        $arr = $this->servicios_model->servicio_x_cliente($id_cliente, $id_servicio);
        //add the header here
        header('Content-Type: application/json');
        echo json_encode( $arr );
    }

  public function costo_servicio($id_servicio){
        $arr = $this->servicios_model->precio_x_servicio($id_servicio);
        //add the header here
        header('Content-Type: application/json');
        echo json_encode( $arr );
    }
  
}