<?php
class Myreservation_model extends CI_Model
{
	function __construct(){
		parent::__construct();
}
	 function fetch_d()  
      {  
          $query= $this->db->query("SELECT c.email, c.fname,c.lname,c.phone,r.adate,r.nights,c.activityid,r.packageid,w.wdate,r.ddate FROM client c,reservationyurt r, whenn w WHERE c.clientid= w.clientid and c.email='".$this->input->post('email')."'");  
              
 
           return $query->result_array();  
      }  
	}

?>