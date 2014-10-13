<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->config->load('code_igniter_hello_world');
		$this->load->helper('url');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('hola_mon');
	}
	
	public function grettings_2(){
		$data = array();

		//echo $_POST;
		//var_export($_POST);
		print_r($_POST);

		$name = $this->input->get_post('name');
		$data['name']= $name;
		$this->load->view('grettings',$data);
	}

	public function form()
	{
		$data= array();

		$data['firstname']=$this->input->get_post('firstname');
		$data['lastname']=$this->input->get_post('lastname');
		$this->load->view('form_exemple',$data);
		
	}
	/*public function grettings($name){
		$data= array();
		
		$parameter_1 = $this->input->get('parametre1');

		$data['parameter1'] = $name;
	    $data['parametre2'] = $this->config->item('academic_period');
	         
	    $this->load->view('grettings',$data);
	}*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */