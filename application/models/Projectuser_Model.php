<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 class Projectuser_Model extends PIXOLO_Model 
 { 
	 public $_table = 'projectuser';  
 
 	 //Write functions here 
 	 public function getprojectsbyuserid($id)
 	{
 		$query = $this->db->query ('SELECT `projects`.`name` AS `projectname`, `projectuser`.`projectid` AS `projectid` 
       FROM `projectuser`
       INNER JOIN `projects`
       ON `projects`.`id`=`projectuser`.`projectid`
       WHERE `projectuser`.`userid`= '.$id)->result();
 		return $query;
 	}
 	public function gettasksbyprojectid($id)
 	{
 		$query = $this->db->query ('SELECT `tasks`.`id` AS `taskid`, `tasks`.`name` AS `taskname`, `tasks`.`desc` AS `taskdesc`, `tasks`.`deadline_timestamp` AS `deadline`, `users`.`name` AS `username`, `users`.`id` AS `userid`
       FROM `tasks`
       INNER JOIN `users`
       ON `tasks`.`userid`=`users`.`id`
       WHERE `tasks`.`projectid`= '.$id)->result();
 		return $query;
 	}

 	public function test($name,$lastname,$text,$timestamp,$status,$image)
 	{
 		$query = $this->db->query("INSERT INTO `test` (name, lastname, text, timestamp, status, image) VALUES ('$name', '$lastname','$text', now(), '$status', '$image')");
 		return query;
 	}
 } 
 
 ?>