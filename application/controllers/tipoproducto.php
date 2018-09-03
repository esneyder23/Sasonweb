<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipoproducto extends CI_Controller {
	
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 

        if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
        
         
        //llamo al helper url
          
         
        //llamo o incluyo el modelo
        $this->load->model("tipoproducto_model");
         
        //cargo la libreria de sesiones
        
    }
    
     
    //controlador por defecto
    public function index(){          

        
            $tipoproducto["ver"]=$this->tipoproducto_model->ver();
         
            //cargo la vista y le paso los datos
            $this->load->view("admin/tipoproducto",$tipoproducto);
        	
		}
        //array asociativo con la llamada al metodo
        //del modelo
        
    
     
    //controlador para añadir
    public function add(){
         
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
         
        //llamo al metodo add
        $add=$this->tipoproducto_model->add(
                $this->input->post("nombreProducto")                
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto');
        }else{
            $this->session->set_flashdata('incorrecto');
        }
         
        //redirecciono la pagina a la url por defecto
        redirect(base_url("tipoproducto"));
    }
     
    //controlador para modificar al que 
    //le paso por la url un parametro
    public function mod($idTipoProducto){
        if(is_numeric($idTipoProducto)){
          $datos["mod"]=$this->tipoproducto_model->mod($idTipoProducto);
          $this->load->view("admin/modificarTipoProducto",$datos);
          if($this->input->post("submit")){
                $mod=$this->tipoproducto_model->mod(
                        $idTipoProducto,
                        $this->input->post("submit"),
                        $this->input->post("nombreProducto")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Usuario modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Usuario modificado correctamente');
                }
                redirect(base_url("tipoproducto"));
            }
        }else{
            redirect(base_url("tipoproducto"));
        }
    }
     
    //Controlador para eliminar
    public function eliminar($idTipoProducto){
        if(is_numeric($idTipoProducto)){
          $eliminar=$this->tipoproducto_model->eliminar($idTipoProducto);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
          }
          redirect(base_url("tipoproducto"));
        }else{
            redirect(base_url("tipoproducto"));
        }
    }
}
?>