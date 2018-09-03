<?php
defined('BASEPATH') OR exit('No direct script access allowed');


               //extendemos CI_Model
class domiciliario_model extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM domiciliario;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
     
    public function add($nombre,$apellido,$identificacion,$telefono,$foto,$placaMoto){
        $consulta=$this->db->query("SELECT nombre FROM domiciliario WHERE nombre LIKE '$nombre'");
        if($consulta->num_rows()==0){
            $consulta=$this->db->query("INSERT INTO domiciliario VALUES(NULL,'$nombre','$apellido','$identificacion','$telefono','$foto','urlFoto','$placaMoto','1');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
     
    public function mod($idDomiciliario,$modificar="NULL",$nombre="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM domiciliario WHERE idDomiciliario=$idDomiciliario");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE domiciliario SET nombre='$nombre' WHERE idDomiciliario=$idDomiciliario;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }
     
    public function eliminar($idDomiciliario){
       $consulta=$this->db->query("DELETE FROM domiciliario WHERE idDomiciliario=$idDomiciliario");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
}
?>