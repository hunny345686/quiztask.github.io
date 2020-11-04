<?php
class quiz extends CI_Model 
{
	
	function saverecords($newdata)
	{
		   //print_r($newdata);
          $this->db->insert('userdata',$newdata);
         // return $this->db->insert_id();
	}

	function display_records()
	{
	$query=$this->db->query("select * from userdata");
	return $query->result();
	}
	
}