<?php
defined('BASEPATH') OR exit('No direct script access allowed');


               //extendemos CI_Model
class tipoproducto_model extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM tipoproducto;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
     
    public function add($nombreProduto){
        $consulta=$this->db->query("SELECT nombreProducto FROM tipoproducto WHERE nombreProducto LIKE '$nombreProduto'");
        if($consulta->num_rows()==0){
            $consulta=$this->db->query("INSERT INTO tipoproducto VALUES(NULL,'$nombreProduto','1','1');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
     
    public function mod($idTipoProducto,$modificar="NULL",$nombreProduto="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM tipoproducto WHERE idTipoProducto=$idTipoProducto");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE tipoproducto SET nombreProducto='$nombreProduto' WHERE idTipoProducto=$idTipoProducto;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }
     
    public function eliminar($idTipoProducto){
       $consulta=$this->db->query("DELETE FROM tipoproducto WHERE idTipoProducto=$idTipoProducto");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
 
 
}
?>