<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 class Task_Model extends PIXOLO_Model 
 { 

 
 	 //Write functions here 
 	public function gettasksbyuserid($id)
 	{
 		$query = $this->db->query('SELECT * FROM `tasks` WHERE `userid` = '.$id)->result();
 		return $query;
 	}
 } 
 
 ?>