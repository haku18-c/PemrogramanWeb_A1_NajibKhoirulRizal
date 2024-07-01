<?php

	class Siswa_model extends CI_Model{

		protected $table = 'siswa';
		public function rules(){

			return [

				[
				 'field' => 'nama',
				 'label' => 'nama',
				 'rules' => 'trim|required'
				],

				[
				 'field' => 'nisn',
				 'label' => 'nisn',
				 'rules' => 'trim|required|numeric|min_length[8]|max_length[10]'
				],

				[
				 'field' => 'jurusan',
				 'label' => 'jurusan',
				 'rules' => 'trim|required'
				],

				[
				 'field' => 'email',
				 'label' => 'email',
				 'rules' => 'trim|required'
				],

				[
				 'field' => 'nohp',
				 'label' => 'nama',
				 'rules' => 'trim|required'
				],

				[
				 'field' => 'agama',
				 'label' => 'nama',
				 'rules' => 'trim|required'
				],

				[
				 'field' => 'jenis_kelamin',
				 'label' => 'nama',
				 'rules' => 'trim|required'
				],

				[
				 'field' => 'alamat',
				 'label' => 'alamat',
				 'rules' => 'trim|required'
				]
			];
		}

		public function getdata(){
			return $this->db->get($this->table);
		}

		public function add(){
			$nama		= $this->input->post('nama');
			$nisn 		= $this->input->post('nisn');
			$jurusan	= $this->input->post('jurusan');
			$email 		= $this->input->post('email');
			$nohp 		= $this->input->post('nohp');
			$agama 		= $this->input->post('agama');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$alamat		= $this->input->post('alamat');

			$data = array(
					'nama'		=> $nama,
					'nisn'		=> $nisn,
					'jurusan'	=> $jurusan,
					'email'		=> $email,
					'nohp'		=> $nohp,
					'jenis_kelamin'	=> $jenis_kelamin,
					'agama'		=> $agama,
					'alamat'	=> $alamat
					);
			return $this->db->insert($this->table, $data);

		}

		public function getId($id){
			return $this->db->get_where($this->table,['id' => $id])->row();
		}


		public function update(){
			$id			= $this->input->post('id');
			$nama		= $this->input->post('nama');
			$nisn 		= $this->input->post('nisn');
			$jurusan	= $this->input->post('jurusan');
			$email 		= $this->input->post('email');
			$nohp 		= $this->input->post('nohp');
			$agama 		= $this->input->post('agama');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$alamat		= $this->input->post('alamat');

			$data = array(
					'nama'		=> $nama,
					'nisn'		=> $nisn,
					'jurusan'	=> $jurusan,
					'email'		=> $email,
					'nohp'		=> $nohp,
					'jenis_kelamin'	=> $jenis_kelamin,
					'agama'		=> $agama,
					'alamat'	=> $alamat
					);
			return $this->db->update($this->table, $data, array('id' => $id));

		}

		public function delete($id){
			return $this->db->delete($this->table, array('id' => $id));
		}
	}
?>
