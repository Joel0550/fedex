<?php
class Pedidos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Pedido');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['pedidos'] = $this->Pedido->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('pedidos/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('pedidos/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoPedido = array(
            "cod_ped" => $this->input->post('cod_ped'),
            "fecha_ped" => $this->input->post('fecha_ped'),
            "total_ped" => $this->input->post('total_ped'),
            "latitud_ped" => $this->input->post('latitud_ped'),
            "longitud_ped" => $this->input->post('longitud_ped')
        );
        if ($this->Pedido->insertar($datosNuevoPedido)) {
            redirect('pedidos/index');
        } else {
            echo "<h1>ERROR DE LA PAGINA</h1>";
        }
    }
    //funcion para eliminar instructores
    public function eliminar($cod_ped)
    {
        if ($this->Pedido->borrar($cod_ped)) {
            redirect('pedidos/index');
        } else {
            echo "ERROR AL BORRAR :(";
        }
    }
} // Cierre de la clase
