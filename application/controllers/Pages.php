<?php
  /**
   *
   */
  class Pages extends CI_Controller
  {
    public function view($page = 'home')
    {
      {

        $data['title'] = ucfirst($page);
        $this->load->view('template/header.php');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('template/footer.php');
      }
    }
  }


 ?>
