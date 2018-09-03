<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class zonas extends CI_Controller {
	
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 

        if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
        
         
        //llamo al helper url
          
         
        //llamo o incluyo el modelo
        $this->load->model("zona_model");
         
        //cargo la libreria de sesiones
        
    }
    
     
    //controlador por defecto
    public function index(){          

        
            $zonas["ver"]=$this->zona_model->ver();
         
            //cargo la vista y le paso los datos
            $this->load->view("admin/zonas",$zonas);
        	
		}
        //array asociativo con la llamada al metodo
        //del modelo
        
    
     
    //controlador para añadir
    public function add(){
         
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
         
        //llamo al metodo add
        $add=$this->zona_model->add(
                $this->input->post("nombreZona")                
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto');
        }else{
            $this->session->set_flashdata('incorrecto');
        }
         
        //redirecciono la pagina a la url por defecto
        redirect(base_url("zonas"));
    }
     
    //controlador para modificar al que 
    //le paso por la url un parametro
    public function mod($idZona){
        if(is_numeric($idZona)){
          $datos["mod"]=$this->zona_model->mod($idZona);
          $this->load->view("admin/modificarZonas",$datos);
          if($this->input->post("submit")){
                $mod=$this->zona_model->mod(
                        $idZona,
                        $this->input->post("submit"),
                        $this->input->post("nombreZona")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Usuario modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Usuario modificado correctamente');
                }
                redirect(base_url("zonas"));
            }
        }else{
            redirect(base_url("zonas"));
        }
    }
     
    //Controlador para eliminar
    public function eliminar($idZona){
        if(is_numeric($idZona)){
          $eliminar=$this->zona_model->eliminar($idZona);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
          }
          redirect(base_url("zonas"));
        }else{
            redirect(base_url("zonas"));
        }
    }
}
?>