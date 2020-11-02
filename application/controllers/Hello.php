<?php
class Hello extends CI_Controller {
    public function __construct() {
        //call default Constructor
        parent::__construct();

        //load database secara manual
        $this->load->database();

        //load Model
        $this->load->model('Hello_Model');

        // load Helper
        $this->load->helper('url');
    }

    public function index() {
        echo "Hello World";
    }

    public function about() {
        $this->load->view('about');
    }

    public function savedata() {
        //load registration view form
        $this->load->view('registration');

        //cek submit button 
        if ($this->input->post('save')) {
            //get data form dan store di local variable 
            $n = $this->input->post('name');
            $e = $this->input->post('email');
            $m = $this->input->post('mobile');

            //call saverecords method dari Hello_Model
            //lewatkan variable sebagai parameter
            $this->Hello_Model->saverecords($n, $e, $m);
            // echo "Data Berhasil Disimpan!";
            redirect("hello/displaydata");  
        }
    }

    public function displaydata() {
        $result['data'] = $this->Hello_Model->displayrecords();
        $this->load->view('display_records', $result);
    }
}
