<?php

class fungsi {
    protected $ci;
    function __construct() {
        $this->ci =& get_instance();
    }
    function user_login() {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('user_id');
        $user_data = $this->ci->user_m->get($user_id);
        return $user_data;
    }
}