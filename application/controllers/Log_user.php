<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('interface_model');
		$this->load->model('konten_model');
	}

	public function index()
	{
		$data['title'] = $this->konten_model->title();
		$this->load->view('loguser/header');
		$this->load->view('loguser/log_user', $data);
		$this->load->view('loguser/footer');
	}

	public function daftar()
	{
		$this->load->view('loguser/header');
		$this->load->view('loguser/daftar_user');
		$this->load->view('loguser/footer');
	}
	public function lupa_password()
	{
		$this->load->view('loguser/header');
		$this->load->view('loguser/lupa_password');
		$this->load->view('loguser/footer');
	}
	public function reset_password()
	{
		$this->load->view('loguser/header');
		$this->load->view('loguser/reset_password');
		$this->load->view('loguser/footer');
	}

	function user_add()
    {
    	$this->form_validation->set_rules('nama', 		'Nama Lengkap', 			'required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('kategori', 	'Kategori', 				'required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('id_member', 	'NIK / NIS', 				'required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('email', 		'Email', 					'required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('password', 	'Password', 				'required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('passconf', 	'Password Confirmation', 	'required|matches[password]',array('required' => '%s Harus di isi.','matches'=>'%s Harus sama dengan password'));

    	if ($this->form_validation->run() != FALSE){
    		if($this->input->post('submit')){
				$this->konten_model->tambah_log_member(); 
    			$this->session->set_flashdata('success', 'Register berhasih. Harap melapor kepetugas perpustakaan untuk aktifkan akun...');
    			redirect('log_user/daftar/');
    		}
        }else{
			$this->session->set_flashdata('failed', 'Register gagal.');
			$this->load->view('loguser/header');
			$this->load->view('loguser/daftar_user');
			$this->load->view('loguser/footer');
        }
    }

    function user_login()
	{
		// Fungsi Login
		$this->form_validation->set_rules('id_member', 	'NIK / NIS','required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('password', 	'Password', 'required',array('required' => '%s Harus di isi.'));
		$this->form_validation->set_rules('kategori', 	'Kategori', 'required',array('required' => '%s Harus di isi.'));

		$id_member 	= $this->input->post('id_member');
		$kategori 	= $this->input->post('kategori');
		$password 	= md5($this->input->post('password'));
		
		if($this->form_validation->run() != FALSE) {
			$this->simple_log_user->login($id_member,$password,$kategori);
		}else{
			$this->session->set_flashdata('failed', 'Gagal Login');
			$this->load->view('loguser/header');
			$this->load->view('loguser/log_user');
			$this->load->view('loguser/footer');
		}
	}

	function logout(){
    	$this->session->sess_destroy();
    	redirect('log_user');
  }






}
