<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smartedu extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('index.php');
	}
	public function buku(){
		$this->load->view('buku.php');
	}
	public function login_page(){
		$this->load->view('login.php');
	}
	public function user_auth(){
		extract($_POST);
		$this->load->model('User');
		$user = $this->User->select_user($_POST['username']);

		if($user==null){
			echo "null data";
		}
		else{
			if($user['username']==$_POST['username']&&$user['password']==md5($_POST['password'])){
				$this->session->set_userdata($user);
				$this->dashboard_page();
			}
			else{
				echo "password atau username salah";
			}
		}
	}
	public function register_page(){
		$this->load->view('register.php');
	}
	public function dashboard_page(){
		$this->load->view('dashboard.php');
	}
	public function buku_page(){
		$this->load->model('Buku');
		$row = $this->Buku->getRowBuku();
		$config['base_url'] = 'http://localhost/SmartEdu2/index.php/smartedu/buku_page';
		$config['total_rows'] = $row;
		$config['per_page'] = 2;
		$start = $this->uri->segment(3);
		$this->pagination->initialize($config);
		
		$buku = $this->Buku->getBuku($config['per_page'],$start);
		$data['buku'] = $buku;
		$this->load->view('caribuku',$data);
	}
}
