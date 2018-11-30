<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chomepage extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // $this->load->view('layout/headhome');
        $this->load->view('layout/navhome');
    }
    
    public function index(){
		$this->load->view('vhomepage');
        // $this->load->view('layout/footerhome');
    }
    
}