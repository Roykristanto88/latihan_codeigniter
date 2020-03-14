<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function index() {

$tampilkanData=$this->HomeModel->getData();

		$this->load->view('home',array("tampilkanData" => $tampilkanData));
		//$this->load->model('HomeModel');
		//menampung fungsi dari getData()
		//$tampilkanData= $this->HomeModel->getData();

		//echo "Nama:". $tampilkanData['Nama']. "<br>";
		//echo "kampus:". $tampilkanData['Kampus']. "<br>";
		//echo "website:". $tampilkanData['Website']. "<br>";
}
}