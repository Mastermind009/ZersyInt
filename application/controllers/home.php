<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['title'] = "MDL + CODEIGNITER EVENT PAGE!";
		$this->load->view('template/navigation');
	//	$this->load->view('template/header',$data);
	//	$this->load->view('home');
	//	$this->load->view('template/footer');
	}
}
