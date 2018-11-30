<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cloreg extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->view('layout/head');
    }
    
    public function login(){
        $this->load->view('vlogin');
        $this->load->view('layout/footer');
    }

        public function profile(){
        $this->load->view('layout/header');
        $this->load->view('vuserprofile');
        $this->load->view('layout/footer');
    }

        public function editprofile(){
        $this->load->view('layout/header');
        $this->load->view('vedituserprofile');
        $this->load->view('layout/footer');
    }
        
        public function register(){
            $this->load->view('vregister');
            $this->load->view('layout/footer');
    }


        public function forgotpass(){
            $this->load->view('vforgotpass');
            $this->load->view('layout/footer');
    }

        public function email(){
            $this->load->view('vemail');
            $this->load->view('layout/footer');
    }

        public function articles(){
            $this->load->view('layout/header');
            $this->load->view('varticles');
            $this->load->view('layout/footer');
    }

        public function articlescont(){
            $this->load->view('layout/header');
            $this->load->view('varticlescont');
            $this->load->view('layout/footer');
    }

        public function modulo(){
           
            $this->load->view('vmodulo');
           
    }

        public function mapaemprende(){
            $this->load->view('layout/header');
            $this->load->view('vmapaemprende');
            $this->load->view('layout/footer');
    }

        public function nuevaidea(){
            $this->load->view('layout/header');
            $this->load->view('vnuevaidea');
            $this->load->view('layout/footer');
    }

        public function socios(){
            $this->load->view('layout/header');
            $this->load->view('vsocios');
            $this->load->view('layout/footer');
    }

}