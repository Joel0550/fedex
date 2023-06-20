<?php
class Clientes extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Cliente');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['clientes'] = $this->Cliente->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('clientes/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('clientes/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoCliente = array(
            "cod_cli" => $this->input->post('cod_cli'),
            "nom_cli" => $this->input->post('nom_cli'),
            "ape_cli" => $this->input->post('ape_cli'),
            "correo_cli" => $this->input->post('correo_cli'),
            "tel_cli" => $this->input->post('tel_cli'),
            "dir_cli" => $this->input->post('dir_cli'),
            "ciu_cli" => $this->input->post('ciu_cli'),
            "pais_cli" => $this->input->post('pais_cli'),
            "latitud_cli" => $this->input->post('latitud_cli'),
            "longitud_cli" => $this->input->post('longitud_cli')
        );
        if ($this->Cliente->insertar($datosNuevoCliente)) {
            redirect('clientes/index');
        } else {
            echo "<h1>ERROR DE LA PAGINA</h1>";
        }
    }
    //funcion para eliminar instructores
    public function eliminar($cod_cli)
    {
        if ($this->Cliente->borrar($cod_cli)) {
            redirect('clientes/index');
        } else {
            echo "ERROR AL BORRAR :(";
        }
    }
} // Cierre de la clase
