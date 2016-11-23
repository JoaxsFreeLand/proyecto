<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Home_model');

  }

  public function index()
  {
    $a = array();
    $a['producto']= $this->Home_model->lista();
    $this->load->view('home_view', $a);
  }
  public function add()
  {
    if ($this->input->post('submit')) {
      $this->form_validation->set_rules('name','Nombre','required|trim');
      $this->form_validation->set_rules('descri','Descripcion','required|trim');
      $this->form_validation->set_rules('precio','Precio','required|trim');
      //traduccion del validacion
      $this->form_validation->set_message('required','<h4>El campo "%s" es obligatorio. </h4>');

        if($this->form_validation->run() != FALSE)
        {
          $this->Home_model->home_add();
          $data = array('mensaje' => "<h4>El producto se agrego correctamente.</h4>");
          $this->load->view('home2_view', $data);
        }else{
          $this->load->view('home_view');
        }
    }else{
        redirect(base_url().'Home');
      }
    }
  }
