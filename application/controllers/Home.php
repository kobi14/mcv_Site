<?php
class Home extends CI_Controller {

    public function index()
    {
            $this->load->view('home.php');
    }

     public function galleryR()
     {
            $this->load->view('galleryR.php');
     }
    public function galleryR_1()
     {
            $this->load->view('galleryR_1.php');
     }
    public function galleryR_2()
     {
            $this->load->view('galleryR_2.php');
     }
    public function galleryA()
     {
            $this->load->view('galleryA.php');
     }
    public function galleryL()
     {
            $this->load->view('galleryL.php');
     }
    public function galleryC()
     {
            $this->load->view('galleryC.php');
     }
    public function galleryI()
     {
            $this->load->view('galleryI.php');
     }
    public function contact_Us()
    {
            $this->load->view('contact_Us.php');
    }
    public function services()
    {
        $this->load->view('services.php');
    }
     public function about_Us()
    {
        $this->load->view('about_Us.php');
    }
}