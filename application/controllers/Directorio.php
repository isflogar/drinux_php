<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorio extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("Directorio_model");
	}

	public function index()
	{
		$this->addJs("directorio.js");
		$this->addJs("directorio.form.js");
		$this->getTemplate("Directorio", "directorio/index", array(), array("directorio/form"));
	}

	public function save(){
		if($this->input->is_ajax_request() && $this->input->method(TRUE)=='POST')
		{
			$data = $this->input->post();
			$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|alpha');
			$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha');
			$this->form_validation->set_rules('edad', 'Edad', 'trim|required|numeric|min_length[1]|max_length[3]');
			$this->form_validation->set_rules('direccion', 'Dirección', 'trim|required');
			$this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required');
			if ($this->form_validation->run())
			{
				$data["apellidos"] = filter_var($data["apellidos"], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				$data["nombre"] = filter_var($data["nombre"], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				$data["direccion"] = filter_var($data["direccion"], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				$data["telefono"] = filter_var($data["telefono"], FILTER_SANITIZE_NUMBER_INT);
				$response = $this->Directorio_model->save($data);
			}
			else
			{
				$response = array("result"=>false, "msg"=>$this->form_validation->error_string());
			}
			echo json_encode($response);
		}
		else
		{
			redirect($this->base_url."directorio", "refresh");
		}
	}

	public function delete(){
		if($this->input->is_ajax_request() && $this->input->method(TRUE)=='POST')
		{
			$key = (int)$this->input->post("id");
			$response = $this->Directorio_model->delete($key);
			echo json_encode($response);
		}
		else
		{
			redirect($this->base_url."directorio", "refresh");
		}
	}

	public function get(){
		if($this->input->is_ajax_request() && $this->input->method(TRUE)=='GET')
		{
			$key = (int)$this->input->get("id");
			$response = $this->Directorio_model->get($key);
			echo json_encode($response);
		}
		else
		{
			redirect($this->base_url."directorio", "refresh");
		}
	}

	public function grid()
	{
		echo $this->Directorio_model->grid();
	}
}
