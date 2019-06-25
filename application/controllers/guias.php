<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guias extends CI_Controller {
  public function __construct() {
        parent::__construct();
        if (!isset($_SESSION['user_id_web'])) {
            redirect('main');
        } else {
            $this->load->model('guias_model');
            $this->load->model('clientes_model');
            $this->load->model('lugares_model');
            $this->load->model('servicios_model');
            $this->load->model('tipos_pago_model');
            $this->load->model('guias_estado_model');
        }    
    }

    public function index()
    {
        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $usuario_id = $_SESSION['user_id_web'];
        $this->datos['guias_lista'] = $this->guias_model->obtener_todos($usuario_id);
        $this->load->view('guias/guias_lista',$this->datos);
        $this->load->view('main/footer');
    }

    public function ver($id){
        $this->datos['vista'] = "facturacion/tipo_doctos/ver";
        $this->datos['datos'] = $this->tipodoctos_model->obtener_por_id($id);
        $this->load->view('main/principal',$this->datos);
    }

    public function nuevo($resultado = "")
    {
        $claseresultado = "";
        if($resultado  == "error")
        {
            $resultado = "Guia ya esta ingresada!";
            $claseresultado = "danger";
        }
        if($resultado == "success")
        {
            $resultado = "Guia ingresada con exito.!";
            $claseresultado = "success";
        }

        //obtenemos la informacion del usuario logueado
        $infousuario = $this->guias_model->info_usuario($_SESSION['user_id_web']);
        //buscamos la informacion del cliente al que pertenece el usuario
        $infocliente = $this->clientes_model->obtener_cliente_id($infousuario->id_cliente);

        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $this->datos['id_cliente_envia'] = $infocliente->id_cliente;
        $this->datos['responsable_envia'] = $infousuario->nombre;
        $this->datos['responsable_envia_telefono'] = $infousuario->telefono;
        $this->datos['direccion_envia'] = $infocliente->direccion;
        $this->datos['resultado'] = $resultado;
        $this->datos['claseresultado'] = $claseresultado;
        $this->datos['resultado'] = $resultado;
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->load->view('guias/nuevo',$this->datos);

    }

    public function editar($id){
        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->datos['guias_estado_lista'] = $this->guias_estado_model->obtener_todos();
        $this->datos['datos'] = $this->guias_model->obtener_por_id($id);
        $this->datos['disabledheader'] = "disabled";
        $this->datos['disabled'] = "";
        $this->datos['titulo'] = "Modificar Guia";
        $this->load->view('guias/ver',$this->datos);
    }


    public function visualizar($id){
        $this->datos['claseresultado'] = "";
        $this->datos['resultado'] = "";
        $this->load->view('main/header',$this->datos);
        $this->datos['clientes_lista'] = $this->clientes_model->obtener_todos();
        $this->datos['lugares_lista'] = $this->lugares_model->obtener_todos();
        $this->datos['servicios_lista'] = $this->servicios_model->obtener_todos();
        $this->datos['tipos_pago_lista'] = $this->tipos_pago_model->obtener_todos();
        $this->datos['guias_estado_lista'] = $this->guias_estado_model->obtener_todos();
        $this->datos['datos'] = $this->guias_model->obtener_por_id($id);
        $this->datos['disabledheader'] = "disabled";
        $this->datos['disabled'] = "disabled";
        $this->datos['titulo'] = "Ver Guia";
        $this->load->view('guias/ver',$this->datos);
    }

     public function guardar_post($id=null){
        if($this->input->post()){
           $codigo_guia = $this->input->post('codigo_guia');
           $direccion_envia = $this->input->post('direccion_envia');
           $direccion_recibe = $this->input->post('direccion_recibe');
           $responsable_envia = $this->input->post('responsable_envia');
           $responsable_recibe = $this->input->post('responsable_recibe');
           $responsable_envia_telefono = $this->input->post('telefono_envia');
           $responsable_recibe_telefono = $this->input->post('telefono_recibe');
           $id_tipo_pago = $this->input->post('id_tipo_pago');
           $porcentaje_pago_envia = $this->input->post('porcentaje_pago_envia');
           $porcentaje_pago_recibe = $this->input->post('porcentaje_pago_recibe');
           $id_servicio = $this->input->post('id_servicio');
           $peso = $this->input->post('peso');
           $total_pago_envia = $this->input->post('total_pago_envia');
           $total_pago_recibe = $this->input->post('total_pago_recibe');
           $id_cliente_envia = $this->input->post('id_cliente_envia');
           $id_cliente_recibe = $this->input->post('id_cliente_recibe');
           $id_lugar_origen = $this->input->post('id_lugar_origen');
           $id_lugar_destino = $this->input->post('id_lugar_destino');
           $id_usuario_crea = $_SESSION['user_id_web'];
           $precio_especial = $this->input->post('precio_especial');
           $precio = $this->input->post('precio');
           $peso_maximo = $this->input->post('peso_maximo');
           $precio_peso_adicional = $this->input->post('precio_peso_adicional');
           $this->guias_model->guardar($codigo_guia,$direccion_envia,$direccion_recibe,$responsable_envia,$responsable_recibe,$responsable_envia_telefono,$responsable_recibe_telefono,$id_tipo_pago,$porcentaje_pago_envia,$porcentaje_pago_recibe,$id_servicio,$peso,$total_pago_envia,$total_pago_recibe,$id_cliente_envia,$id_cliente_recibe, $id_lugar_origen, $id_lugar_destino,$id_usuario_crea, $id, $precio, $peso_maximo, $precio_peso_adicional, $precio_especial);
           redirect('guias');
           
        }else
        {

        }
     }

   public function validaguia($codigo_guia)
    {
       $validacionguia = $this->guias_model->validar_guia_existe($codigo_guia);
        if($validacionguia == null )
            {
        echo json_encode("false");
      }else{
       echo json_encode("true"); 
      }
    }

    public function imprimir_guia($id_guia){
       // Se carga la libreria fpdf
        $this->load->library('Pdf_guia');
       // $this->load->library('Barcode');

        $this->pdf = new Pdf_guia();
        // Agregamos una página
        $this->pdf->AddPage();

        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $guia = $this->guias_model->obtener_guia($id_guia);
        //impresion del codigo de barras
        $this->pdf->Code39(137,40,$guia->codigo_guia,1,10);

        $this->pdf->SetTitle("Guia");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
       //impresion informacion del encabezado
        $this->pdf->SetX(150);
       $this->pdf->Cell(20,10,utf8_decode('GUÍA No.'),0,0,'R');
       $this->pdf->Cell(20,10,$guia->codigo_guia,0,0,'R');
       $this->pdf->Ln(22);
      //impresion del detalle de guias
       //$this->pdf->MultiAlignCell(ancho,alto,texto,borde,salto de linea,justificacion,0);
        $this->pdf->Cell(30,7,'DIA: '.$guia->dia,'TBL',0,'L','0');
        $this->pdf->Cell(30,7,'MES: '.$guia->mes,'TB',0,'L','0');
        $this->pdf->Cell(30,7,utf8_decode('AÑO: ').$guia->anio,'TB',0,'L','0');
        $this->pdf->Cell(45,7,' ORIGEN: '.$guia->lugar_origen,'TBL',0,'L','0');
        $this->pdf->Cell(45,7,' DESTINO: '.$guia->lugar_destino,'TBR',0,'L','0');
        $this->pdf->Ln(7);
        //$html = '';
         //$this->pdf->WriteHTML($html);
        //informacion de los responsables
        $responsable_envia = $guia->responsable_envia;
        $responsable_recibe = $guia->responsable_recibe;
        $cuantosresponsableenvia = strlen($responsable_envia);
        $cuantosresponsablerecibe = strlen($responsable_recibe);
        $peso = str_pad($guia->peso,$cuantosresponsableenvia);
        $piezas = str_pad($guia->peso,$cuantosresponsableenvia);
        if($cuantosresponsableenvia > $cuantosresponsablerecibe)
        {
          $responsable_recibe = str_pad($guia->responsable_recibe,$cuantosresponsableenvia);
        }
         if($cuantosresponsableenvia < $cuantosresponsablerecibe)
        {
          $responsable_envia = str_pad($guia->responsable_envia,$cuantosresponsablerecibe);
        }
        //informacion de los clientes
        $cliente_envia = $guia->cliente_envia;
        $cliente_recibe = $guia->cliente_recibe;
        $cuantosclienteenvia = strlen($cliente_envia);
        $cuantosclienterecibe = strlen($cliente_recibe);
        if($cuantosclienteenvia > $cuantosclienterecibe)
        {
          $cliente_recibe = str_pad($guia->cliente_recibe,$cuantosclienteenvia);
        }
         if($cuantosclienteenvia < $cuantosclienterecibe)
        {
          $cliente_envia = str_pad($guia->cliente_envia,$cuantosclienterecibe);
        }
        //informacion de la direccion
        $direccion_envia = $guia->direccion_envia;
        $direccion_recibe = $guia->direccion_recibe;
        $cuantosdireccionenvia = strlen($direccion_envia);
        $cuantosdireccionrecibe = strlen($direccion_recibe);
        if($cuantosdireccionenvia > $cuantosdireccionrecibe)
        {
          $direccion_recibe = str_pad($guia->direccion_recibe,$cuantosdireccionenvia);
        }
         if($cuantosdireccionenvia < $cuantosdireccionrecibe)
        {
          $direccion_envia = str_pad($guia->direccion_envia,$cuantosdireccionrecibe);
        }


        $this->pdf->MultiAlignCell(90,6,'REMITENTE: '.$responsable_envia,1,0,'L',0);
        $this->pdf->MultiAlignCell(90,6,'DESTINATARIO: '.$responsable_recibe,1,1,'L',0);
        $this->pdf->MultiAlignCell(90,6,utf8_decode('COMPAÑIA ENVÍA: ').$cliente_envia,1,0,'L',0);
        $this->pdf->MultiAlignCell(90,6,utf8_decode('COMPAÑIA RECIBE: ').$cliente_recibe,1,1,'L',0);
        $this->pdf->MultiAlignCell(90,6,utf8_decode('DIRECCIÓN DE QUIÉN ENVIA: ').$direccion_envia,1,0,'L',0);
        $this->pdf->MultiAlignCell(90,6,utf8_decode('DIRECCIÓN DE QUIÉN RECIBE: ').$direccion_recibe,1,1,'L',0);
        $this->pdf->MultiAlignCell(90,6,utf8_decode('NOMBRE DE QUIÉN ENVÍA: ').$guia->responsable_envia,1,0,'L',0);
        $this->pdf->MultiAlignCell(45,6,'PIEZAS: '.$piezas,1,0,'L',0);
        $this->pdf->MultiAlignCell(45,6,'PESO: '.$peso,1,1,'L',0);
        $this->pdf->Cell(90,7,'FIRMA:','TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->Cell(89,7,utf8_decode('DESCRIPCIÓN:'),'TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->Cell(30,7,'SEGURO:','TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->SetFont('Arial', 'B', 6);
        $this->pdf->Cell(149,7,utf8_decode('POR ESTE MEDIO EL CLIENTE DECLARA QUE ESTE ENVÍO NO CONTIENE DINERO EN EFECTIVO SI NO QUE:'),'TBR',0,'L','0');
        $this->pdf->Ln(7);
        $this->pdf->SetFont('Arial', 'B', 9);
        $this->pdf->Cell(100,7,'RECIBIDO POR TRANSPORTES DE CARGA:','TBL',0,'L','0');
        $this->pdf->Cell(30,7,'FECHA:','TBL',0,'L','0');
        $this->pdf->Cell(1,7,'','TBL',0,'L','0');
        $this->pdf->Cell(49,7,'TIPO DE PAGO: '.$guia->tipo_pago,'TBR',0,'L','0');
        $this->pdf->Ln(7);

        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Guia_".$guia->codigo_guia.".pdf", 'D');
    }
  
  
}
     
