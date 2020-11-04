<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
        $this->load->library('session');

        $this->load->database();
		/*load Model*/
		$this->load->model('quiz');
    }


	public function index()
	{
		$this->load->view('index');
	}

	public function Qfirst()
	{

		$name =$this->input->post('name');
		$this->session->set_userdata("name",$name );
		$this->load->view('Qfirst');
	}

	public function Qsecend()
	{
		$criketer = $this->input->post('criketer');
		$this->session->set_userdata("criketer",$criketer );
		$this->load->view('Qsecend');
	}

	public function summary()
	{
		$colors = $this->input->post('color');
		$colorsWithCommas= implode(",",$colors);

		//$criketers = $this->session->userdata();
	    $name = $this->session->userdata("name");
	    $criketer = $this->session->userdata("criketer");

		//$username = $this->session->userdata();
		//print_r($criketers)  ;
		//echo implode('', $criketers);
	     $newdata = array(
         'criketers'=> $criketer,
         'name'=> $name,
         'flag' => $colorsWithCommas
        );
	     $this->quiz->saverecords($newdata);
       // print_r($newdata);
		$this->load->view('summary',['data'=>$newdata]);

	}

	public function history()
	{
		$result=$this->quiz->display_records();
	    $this->load->view('history',['data'=>$result]);
	}

}
