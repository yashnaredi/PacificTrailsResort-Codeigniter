<?php
class Yurt_model extends CI_Model
{
	function __construct(){
		parent::__construct();
}
	 function fetch_data()  
      {  
           $query = $this->db->get("package");  
              
 
           return $query;  
      }  
	}

?>