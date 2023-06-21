<?php
class Sucursales extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Sucursal');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['sucursales'] = $this->Sucursal->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('sucursales/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('sucursales/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoSucursal = array(
            "cod_suc" => $this->input->post('cod_suc'),
            "nom_suc" => $this->input->post('nom_suc'),
            "dir_suc" => $this->input->post('dir_suc'),
            "ciu_suc" => $this->input->post('ciu_suc'),
            "pais_suc" => $this->input->post('pais_suc'),
            "latitud_suc" => $this->input->post('latitud_suc'),
            "longitud_suc" => $this->input->post('longitud_suc')
        );
        if ($this->Sucursal->insertar($datosNuevoSucursal)) {
            redirect('sucursales/index');
        } else {
            echo "<h1>ERROR DE LA PAGINA</h1>";
        }
    }
    //funcion para eliminar instructores
    public function eliminar($cod_suc)
    {
        if ($this->Sucursal->borrar($cod_suc)) {
            redirect('sucursales/index');
        } else {
            echo "ERROR AL BORRAR :(";
        }
    }
} // Cierre de la clase