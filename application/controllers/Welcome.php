<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
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

}
