<?php
defined('BASEPATH') OR exit('No direct script access allowed');


               //extendemos CI_Model
class zona_model extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM zona;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
     
    public function add($nombreZona){
        $consulta=$this->db->query("SELECT nombreZona FROM zona WHERE nombreZona LIKE '$nombreZona'");
        if($consulta->num_rows()==0){
            $consulta=$this->db->query("INSERT INTO zona VALUES(NULL,'$nombreZona');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
     
    public function mod($idZona,$modificar="NULL",$nombreZona="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM zona WHERE idZona=$idZona");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE zona SET nombreZona='$nombreZona' WHERE idZona=$idZona;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }
     
    public function eliminar($idZona){
       $consulta=$this->db->query("DELETE FROM zona WHERE idZona=$idZona");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
 
 
}
?>