<?php
/**
 *
 */
class Auth extends CI_Controller
{
  function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('user_id'))
        {
            redirect('login');
        }
    }
}


 ?>
