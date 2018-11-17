<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantencion extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mantencion_model','mantencion');
		$this->load->library('Layout');        
        /*if ($this->user = $this->session->userdata('logged_in')) {
            
            
        }else {
         exit;
        }*/
    }
     public function index($idempresa = null)
	{
		$data['mantenciones'] = $this->mantencion->findAll(array('emp_id',$idempresa));
		$this->load->view('header');
		$this->load->view('mantenciones',$data);
		$this->load->view('footer');

		//$this->layout->setLayout('mantenciones');
    }
	public function mantencion($id  = null)
	{
		$mantencion = null;
		if(!is_null($id) && is_numeric($id) && !is_null($mantencion = $this->mantencion->findById($id))){

		}else{
			$mantencion = new Mantencion_model();
		}
		if(isset($_POST['id'])){
			$mantencion->setColumns($_POST);
			$errormantencion = $mantencion->validate();
			if(count($errormantencion)  == 0){
				$mantencion->save();
			}else{
				$data['errors'] = $errormantencion; 
			}
		}
		

        $data['mantencion'] = $mantencion;
		//$this->load->view('masterPage');
		$this->load->view('mantencion/mantencion',$data);
    }
   
    
}
