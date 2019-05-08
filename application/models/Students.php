<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Common_model
 *
 * @author SrikanthG
 */
class Students extends CI_Model {

    public function __construct() {
        parent::__construct();
         $this->load->database('');
    }
        function get_all_students_enq() {
            $this->db->select("students.*","student_enquire.*");
            $this->db->from("student_enquires");
            $this->db->join('students','student_enquires.id = students.id');
            $query = $this->db->get();
            return $query->result();
          
        }

    

}
