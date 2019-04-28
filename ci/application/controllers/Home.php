<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   /**
    * Index Page for this controller.
    *
    * Maps to the following URL
    * http://example.com/index.php/welcome
    * - or -
    * http://example.com/index.php/welcome/index
    * - or -
    * Since this controller is set as the default controller in
    * config/routes.php, it's displayed at http://example.com/
    *
    * So any other public methods not prefixed with an underscore will
    * map to /index.php/welcome/<method_name>
    * @see https://codeigniter.com/user_guide/general/urls.html
    */
   public function index()
   {
      $this->load->view('templates/header');
       $this->load->view('pages/index');
       $this->load->view('templates/footer');
   }

   public function yurt()
   {
    
    $this->load->model('Yurt_model');
    $data["fetch_data"] = $this->Yurt_model->fetch_data();
    $this->load->view('templates/header');
    $this->load->view('pages/content_yurts',$data);
    $this->load->view('templates/footer');
   }

  public function savereservation()
  {             
  $this->form_validation->set_rules('fname','Fname','required');
    $this->form_validation->set_rules('lname','Lname','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('comment','Comments','required');
    $this->form_validation->set_rules('activityid','Activityid','required');
    $this->form_validation->set_rules('packageid','Packageid','required');
    



    if($this->form_validation->run() === FALSE)
    {

   $this->load->view('templates/header');
    $this->load->view('pages/content_reservations');
    $this->load->view('templates/footer');

    }
    else{
      
    $this->load->model('Reservation_model');
    $clientid = uniqid('cl_');
    $resid = uniqid('re_');

    $this->Reservation_model->reserve($clientid,$resid);
  $this->load->view('templates/header');
    $this->load->view('pages/content_reservations');
    $this->load->view('templates/footer');
}



  }
   public function activities()
   {
    $this->load->view('templates/header');
    $this->load->view('pages/content_activities');
    $this->load->view('templates/footer');
   }
   public function shop()
   {
    $this->load->view('templates/header');
    $this->load->view('pages/content_shop');
    $this->load->view('templates/footer');
   }
    public function reservations()
   {
    
    $this->load->model('Reservation_model');
    
    $this->load->view('templates/header');
    $this->load->view('pages/content_reservations');
    $this->load->view('templates/footer');
   }
    
    public function myreservations()
   {

    $this->load->model('Myreservation_model');

    $data['reserved']=$this->Myreservation_model->fetch_d();
    $this->load->view('templates/header');
    $this->load->view('pages/content_myreservations',$data);
    $this->load->view('templates/footer');
   }

   public function callreservation()
   {

    $this->load->model('Myreservation_model');
    $data['reserved']=$this->Myreservation_model->fetch_d();
    $this->load->view('templates/header');
    $this->load->view('pages/content_myreservations',$data);
    $this->load->view('templates/footer');


   }


}
?>