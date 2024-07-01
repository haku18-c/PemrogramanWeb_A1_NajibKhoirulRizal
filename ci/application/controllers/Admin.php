<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->model('Siswa_model');
            $this->load->model('Guru_model');

        }

        public function login() {
            if ($this->input->post('submit')) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $admin = $this->admin_model->getAdmin($username);


                if ($admin) {
                    if (password_verify($password, $admin['password'])) {
                        // Buat session untuk admin
                        $this->session->set_userdata('admin_loggedin', true);
                        redirect('admin/dashboard'); 
                    } else {
                        $data['error'] = 'Password salah';
                    }
                } else {
                    $data['error'] = 'Username tidak ditemukan';
                }
            }

            // Load view login
            $this->load->view('admin/admin_login', isset($data) ? $data : NULL);
        }

        public function dashboard() {
            if (!$this->session->userdata('admin_loggedin')) {
                redirect('admin/login');
            }
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('dashboard');
            $this->load->view('templates/footer');

        }

        public function siswa(){
            if (!$this->session->userdata('admin_loggedin')) {
                redirect('admin/login');
            }
            $data['siswa'] = $this->Siswa_model->getdata()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('siswa/siswa', $data);
            $this->load->view('templates/footer');
    }

        public function tambah_siswa(){
            if (!$this->session->userdata('admin_loggedin')) {
                redirect('admin/login');
            }
            $siswa = $this->Siswa_model;
            $validation = $this->form_validation;
            $validation->set_rules($siswa->rules());
            if($validation->run()){
                $siswa->add();
                redirect('admin/siswa');
                    
            }
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('siswa/tambah');
            $this->load->view('templates/footer');

        }

        public function edit_siswa($id=null){
            if(!isset($id)) redirect('siswa');
            $siswa = $this->siswa_model;
            $validation = $this->form_validation;
            $validation->set_rules($siswa->rules());
            if($validation->run()){
                $siswa->update();
                redirect('admin/siswa');
            }

            $data['siswa']= $siswa->getId($id);
            if(!$data['siswa']) show_404();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('siswa/edit', $data);
            $this->load->view('templates/footer');
    }


        public function hapus_siswa(){
            $id = $this->input->post('id');
            if(!isset($id)) show_404();
            if($this->siswa_model->delete($id)){
                redirect('admin/siswa');
            }

        }

        public function guru(){
            $data['guru'] = $this->guru_model->getdata()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guru/guru', $data);
            $this->load->view('templates/footer');
        }

        public function tambah_guru(){
            $guru = $this->guru_model;
            $validation = $this->form_validation;
            $validation->set_rules($guru->rules());
            if($validation->run()){
                $guru->add();
                redirect('admin/guru');
                
            }
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guru/tambah');
            $this->load->view('templates/footer');

        }

        public function edit_guru($id=null){
            if(!isset($id)) redirect('guru');
            $guru = $this->guru_model;
            $validation = $this->form_validation;
            $validation->set_rules($guru->rules());
            if($validation->run()){
                $guru->update();
                redirect('admin/guru');
            }

            $data['guru']= $guru->getId($id);
            if(!$data['guru']) show_404();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('guru/edit', $data);
            $this->load->view('templates/footer');
    }


        public function hapus_guru(){
            $id = $this->input->post('id');
            if(!isset($id)) show_404();
            if($this->guru_model->delete($id)){

                redirect('admin/guru');
            }

        }


        public function ganti_password() {
            $username = $this->input->post('username'); 
            $new_password = $this->input->post('new_password');
            
            $result = $this->admin_model->update_password($username, $new_password);
            
            if ($result) {
                echo 'Password admin berhasil diganti!';
                redirect('admin/dashboard');
            } else {
                echo 'Gagal mengganti password admin.';
            }
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('templates/sidebar');
            $this->load->view('ganti_pass');
            $this->load->view('templates/footer');
        }

        public function logout() {
            $this->session->unset_userdata('admin_loggedin');
            redirect('admin/login');
    }
}
?>
