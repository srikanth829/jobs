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
class Common_model extends CI_Model {

    public function __construct() {
        parent::__construct();

        function login($username,$password) {
            $this->db->where('username', $username);
            $this->db->where('password', $password);

// Run the query
            $query = $this->db->get('users');
// Let's check if there are any results
            if ($query->num_rows == 1) {
// If there is a user, then create session data
                $row = $query->row();
                $data = array(
                    'userid' => $row->userid,
                    'fname' => $row->fname,
                    'lname' => $row->lname,
                    'username' => $row->username,
                    'validated' => true
                );
                $this->session->set_userdata($data);
                return true;
            }
// If the previous process did not validate
// then return false.
            return false;
        }

    }

}
