<?php defined('BASEPATH') OR exit('No direct script access allowed');
if(!isset($_SESSION)) session_start();

class Home extends CI_Controller
{

	public function __construct()
	{
        parent::__construct();
        date_default_timezone_set("Poland"); // Porto 😏
    }

	public function index()
	{

		$data = array
		(
			'body' 			=> 'home'
		);

		$this->load->view('templates/main', $data);
	}
}
