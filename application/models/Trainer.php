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
class Trainer extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database('');
    }

    function get_all_trainers_posts_enq() {
        $this->db->select("trainer.*", "traine_jobs.*");
        $this->db->from("traine_jobs");
        $this->db->join('trainer', 'traine_jobs.id = trainer.id');
        $query = $this->db->get();
        return $query->result();
    }

}
