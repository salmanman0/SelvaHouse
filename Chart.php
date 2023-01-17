<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Chart_model');
    }

	function index()
	{
	  $data['hasil']=$this->Chart_model->jumlah();
	  $this->load->view('admin/vw_chart',$data);
	}
}
?>