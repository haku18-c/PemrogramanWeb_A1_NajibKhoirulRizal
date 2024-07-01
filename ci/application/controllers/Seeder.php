<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function tambah_admin() {
        // Panggil method tambah_admin dari model
        $username = 'admin';
        $password = 'password'; 
        
        $result = $this->admin_model->tambah_admin($username, $password);
    }

}
?>