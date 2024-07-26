<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		permission();
		$this->load->model("games_model");
		$this->load->model("users_model");
	}

	public function index()
	{   
		$data['games'] = $this->games_model->index();
		$data['users'] = $this->users_model->index();
		$data['title'] = "Dashboard - CodeIgniter.";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function pesquisar()
	{   
		$this->load->model("busca_model");
		$data['title'] = "Resultado da pesquisa por *" .$_POST["busca"] ."*";
		$data['result'] = $this->busca_model->buscar($_POST); 

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}
}
