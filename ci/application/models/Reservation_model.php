<?php

class Reservation_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function reserve($clientid,$resid){
		 
		
		


		 $adate=$this->input->post('adate');
		 $nights=$this->input->post('nights');
		  $ddate = date('Y-m-d',strtotime($adate)+(24*3600*$nights));


		$data1 = array(
		'resid' => $resid,

		'adate' => $this->input->post('adate'),
		'nights' => $this->input->post('nights'),
		'packageid' => $this->input->post('packageid'),
		'ddate' => $ddate
		);

		$data2 = array(
		'clientid' => $clientid,
		'fname' => $this->input->post('fname'),
		'lname' => $this->input->post('lname'),
		'email' => $this->input->post('email'),
		'phone' => $this->input->post('phone'),
		'resid' => $resid,
		'activityid' => $this->input->post('activityid')
		);
		$data3 = array(
		'wdate' => $this->input->post('wdate'),
		'activityid' => $this->input->post('activityid'),
		'clientid' => $clientid
		);
		$this->db->insert('reservationyurt',$data1);
		$this->db->insert('client',$data2);
		$this->db->insert('whenn',$data3);

	}
}
?>