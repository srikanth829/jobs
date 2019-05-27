<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function index() {
        $this->load->helper('url');
        $dasta = [];
        $students = $this->load->model('students');
        $trainer = $this->load->model('trainer');
        $data['trainer_posts'] = $this->trainer->get_all_trainers_posts_enq();
        $data['student_query'] = $this->students->get_all_students_enq();
//          $data['student_query'] = $this->students->get_all_students_enq();
        $this->load->view('welcome_message', $data);
    }

    public function signup() {

        if ($this->input->post('register')) {
            $n = $this->input->post('name');
            $e = $this->input->post('email');
            $p = $this->input->post('pass');
            $m = $this->input->post('mobile');
            $c = $this->input->post('course');

            $que = $this->db->query("select * from student where email='" . $e . "'");
            $row = $que->num_rows();
            if ($row) {
                $data['error'] = "<h3 style='color:red'>This user already exists</h3>";
            } else {
                $que = $this->db->query("insert into student values('','$n','$e','$p','$m','$c')");

                $data['error'] = "<h3 style='color:blue'>Your account created successfully</h3>";
            }
        }
        $this->load->view('register', @$data);
    }

    public function signin() {

        if ($this->input->post('login')) {
            $e = $this->input->post('email');
            $p = $this->input->post('pass');

            $que = $this->db->query("select * from student where email='" . $e . "' and password='$p'");
            $row = $que->num_rows();
            if ($row) {
                redirect('User/dashboard');
            } else {
                $data['error'] = "<h3 style='color:red'>Invalid login details</h3>";
            }
        }
        $this->load->view('signin', @$data);
    }

    function dashboard() {
        $this->load->view('dashboard');
    }

}
