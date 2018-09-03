<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class domiciliario extends CI_Controller {
	
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct(); 

        if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
        
         
        //llamo al helper url
          
         
        //llamo o incluyo el modelo
        $this->load->model("domiciliario_model");
         
        //cargo la libreria de sesiones
        
    }
    
     
    //controlador por defecto
    public function index(){          

        
            $domiciliario["ver"]=$this->domiciliario_model->ver();
         
            //cargo la vista y le paso los datos
            $this->load->view("admin/domiciliario",$domiciliario);
        	
		}
        //array asociativo con la llamada al metodo
        //del modelo
        
    
     
    //controlador para añadir
    public function add(){
        $this->load->view("admin/aggdomiciliario");
         
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
         
        //llamo al metodo add
        $add=$this->domiciliario_model->add(
                $this->input->post("nombre"),
                $this->input->post("apellido"),
                $this->input->post("identificacion"),
                $this->input->post("telefono"),
                $this->input->post("foto"),
                $this->input->post("placaMoto")                   
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto');
        }else{
            $this->session->set_flashdata('incorrecto');
        }
         
        //redirecciono la pagina a la url por defecto
        redirect(base_url("domiciliario"));
    }
     
    //controlador para modificar al que 
    //le paso por la url un parametro
    public function mod($idDomiciliario){
        if(is_numeric($idDomiciliario)){
          $datos["mod"]=$this->domiciliario_model->mod($idDomiciliario);
          $this->load->view("admin/modificardomiciliario",$datos);
          if($this->input->post("submit")){
                $mod=$this->domiciliario_model->mod(
                        $idDomiciliario,
                        $this->input->post("nombre"),
                        $this->input->post("apellido"),
                        $this->input->post("identificacion"),
                        $this->input->post("telefono"),
                        $this->input->post("foto"),
                        $this->input->post("placaMoto")      
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Usuario modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Usuario modificado correctamente');
                }
                redirect(base_url("domiciliario"));
            }
        }else{
            redirect(base_url("domiciliario"));
        }
    }
     
    //Controlador para eliminar
    public function eliminar($idDomiciliario){
        if(is_numeric($idDomiciliario)){
          $eliminar=$this->domiciliario_model->eliminar($idDomiciliario);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Usuario eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Usuario eliminado correctamente');
          }
          redirect(base_url("domiciliario"));
        }else{
            redirect(base_url("domiciliario"));
        }
    }
}
?>