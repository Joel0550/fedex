<?php

    class Pedido extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("pedido", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoPedidos=
            $this->db->get("pedido");
            
            if($listadoPedidos
                ->num_rows()>0){//Si hay datos
                    return $listadoPedidos->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($cod_ped){
            $this->db->where("cod_ped",$cod_ped);
            return $this->db->delete("pedido"); 
        }

    }//Cierre de la clase
?>