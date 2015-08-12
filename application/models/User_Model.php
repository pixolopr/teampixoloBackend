<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 class User_Model extends PIXOLO_Model 
 { 

 
 	 //Write functions here 
 	public function addusers($id,$name,$password,$access)
 	{
 		$query = $this->db->query("INSERT INTO `users` (`id`, `name`, `password`, `access`) VALUES ('$id', '$name', '$password', '$access')");
 		return $query;

 	}

 	public function updateusres($id,$name,$password,$access)
 	{
 		$query = $this->db->query("UPDATE `users` SET `id`= `$id`,`name`= `$name`,`password`= `$password`,`access`= `$access` WHERE `id`= $id");
 		return $query; 	
 		return trure;
 	}
 } 
 
 ?>