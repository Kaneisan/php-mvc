<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function home()
    {
        $this->load->view('layout/dashboard/header');
        $this->load->view('layout/dashboard/sidebar');
        $this->load->view('pages/dashboard/home');
        $this->load->view('layout/dashboard/footer');
    }
}
