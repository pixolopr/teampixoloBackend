<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 header('Access-Control-Allow-Origin: *'); 
 
 class Users extends PIXOLO_Controller { 
 
 	 function __construct(){ 
 	 	 parent::__construct(); 
 
 	 	 $this->load->model('User_Model', 'model'); 
 	 } 

 	 public function index() 
 	 { 
 	 	 $message['json']=$this->model->get_all(); 
 	 	 $this->load->view('json', $message); 
 	 } 
 	 public function addusers()
 	 {
 	 	$id = $this->input->get('id');
 	 	$name = $this->input->get('name');
 	 	$password = $this->input->get('password');
 	 	$access = $this->input->get('access');
 	 	$message['json'] = $this->model->addusers($id,$name,$password,$access);
 	 	$this->load->view('json', $message); 
 	 }
 	 public function updateusers()
 	 {
 	 	$id = $this->input->get('id');
 	 	$name = $this->input->get('name');
 	 	$password = $this->input->get('password');
 	 	$access = $this->input->get('access');
 	 	$message['json'] = $this->model->addusers($id,$name,$password,$access);
 	 	$this->load->view('json', $message); 
 	 }
 }