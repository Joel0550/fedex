<?php

    class Cliente extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("cliente", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoClientes=
            $this->db->get("cliente");
            
            if($listadoClientes
                ->num_rows()>0){//Si hay datos
                    return $listadoClientes->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($cod_cli){
            $this->db->where("cod_cli",$cod_cli);
            return $this->db->delete("cliente"); 
        }

    }//Cierre de la clase
?>