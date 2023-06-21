<?php

    class Sucursal extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("sucursal", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoSucursales=
            $this->db->get("sucursal");
            
            if($listadoSucursales
                ->num_rows()>0){//Si hay datos
                    return $listadoSucursales->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($cod_suc){
            $this->db->where("cod_suc",$cod_suc);
            return $this->db->delete("sucursal"); 
        }

    }//Cierre de la clase
?>