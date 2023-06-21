<?php
class Mapape extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodos(){
            $listadoLugares=
            $this->db->get("pedido");
            if ($listadoLugares->num_rows()
                >0){
                    return $listadoLugares->result();
                }
                return false;
        }
    }
