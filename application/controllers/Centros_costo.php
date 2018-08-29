<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Centros_costo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		$this->load->model('model_centrosCosto');
		$centros_costo['CCOSTO'] = null;
		$centros_costo['CCOSTO'] = $this->model_centrosCosto->get_centrosCostos();
		$this->load->view('centros_costo',$centros_costo);

		
	}

	public function centroc(){

		$this->load->model('model_centrosCosto');
		$centros_costo['CCOSTO'] = null;
		$centros_costo['CCOSTO'] = $this->model_centrosCosto->get_centrosCostos();
		$this->load->view('centros_costo',$centros_costo);

		
	}

	public function gente(){
		$this->load->model('model_gente');
		$gente['Gente'] = null;
		$gente['Gente'] = $this->model_gente->get_gente();
		$this->load->view('gente_tabla', $gente);
	}


}
