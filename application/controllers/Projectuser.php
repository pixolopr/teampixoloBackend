<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 header('Access-Control-Allow-Origin: *'); 
 
 class Projectuser extends PIXOLO_Controller { 
 
 	 function __construct(){ 
 	 	 parent::__construct(); 
 
 	 	 $this->load->model('Projectuser_Model', 'model'); 
 	 } 

 	 public function index() 
 	 { 
 	 	 $message['json']=$this->model->get_all(); 
 	 	 $this->load->view('json', $message); 
 	 } 
 	 public function getprojectsbyuserid()
 	 {
 	 	$id = $this->input->get('id');
 	 	$message['json'] = $this->model->getprojectsbyuserid($id);
 	 	$this->load->view('json', $message); 
 	 }
 	 public function gettasksbyprojectid()
 	 {
 	 	$id = $this->input->get('id');
 	 	$message['json'] = $this->model->gettasksbyprojectid($id);
 	 	$this->load->view('json', $message); 
 	 }

 	 public function upload()
 	 {
 	 	$message['title'] = "Pixolo";
 	 	$this->load->view('form', $message); 
 	 }

 	 public function test()
 	 {
 	 	$name=$this->input->get('name');
 	 	$lastname=$this->input->get('lastname');
 	 	$text=$this->input->get('text');
 	 	$timestamp=$this->input->get('timestamp');
 	 	$status=$this->input->get('status');
 	 	$image=$this->input->get('image');
 	 	$message['json'] = $this->model->test($name,$lastname,$text,$timestamp,$status,$image);
 	 	$this->load->view('form',$message);
 	 }
 }