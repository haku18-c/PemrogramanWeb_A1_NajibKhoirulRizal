<?php

	class Guru_model extends CI_Model{

		protected $table = 'guru';
		public function rules(){

			return [

				[
				 'field' => 'nama',
				 'label' => 'nama',
				 'rules' => 'trim|required'
				],

				[
				 'field' => 'nip',
				 'label' => 'nip',
				 'rules' => 'trim|required|numeric|min_length[10]|max_length[10]'
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
				 'field' => 'mapel',
				 'label' => 'mapel',
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
			$nip 		= $this->input->post('nip');
			$email 		= $this->input->post('email');
			$nohp 		= $this->input->post('nohp');
			$mapel 		= $this->input->post('mapel');
			$agama 		= $this->input->post('agama');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$alamat		= $this->input->post('alamat');

			$data = array(
					'nama'		=> $nama,
					'nip'		=> $nip,
					'email'		=> $email,
					'nohp'		=> $nohp,
					'mapel'		=> $mapel,
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
			$nip 		= $this->input->post('nip');
			$email 		= $this->input->post('email');
			$nohp 		= $this->input->post('nohp');
			$mapel 		= $this->input->post('mapel');
			$agama 		= $this->input->post('agama');
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$alamat		= $this->input->post('alamat');

			$data = array(
					'nama'		=> $nama,
					'nip'		=> $nip,
					'email'		=> $email,
					'nohp'		=> $nohp,
					'mapel'		=> $mapel,
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
