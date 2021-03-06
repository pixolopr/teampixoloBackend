<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 header('Access-Control-Allow-Origin: *'); 
 
 class Tasks extends PIXOLO_Controller { 
 
 	 function __construct(){ 
 	 	 parent::__construct(); 
 
 	 	 $this->load->model('Task_Model', 'model'); 
 	 } 

 	 public function index() 
 	 { 
 	 	 $message['json']=$this->model->get_all(); 
 	 	 $this->load->view('json', $message); 
 	 } 

 	 public function gettasksbyuserid()
 	 {
 	 	$id = $this->input->get('id');
 	 	$message['json'] = $this->model->gettasksbyuserid($id);
 	 	$this->load->view('json', $message); 
 	 }
 }