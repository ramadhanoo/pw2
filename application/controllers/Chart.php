<?php

class Chart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$this->load->view('chart');
    }

    public function column_chart()
    {
    	//load model : pahlawan
    	$this->load->model('pahlawan_model');

    	//ambil data pahlawan dari db
    	$daftar_pahlawan = $this->pahlawan_model->read();

    	//lempar data pahlawan ke view
		$view_data = array();
		$view_data['daftar_pahlawan'] = $daftar_pahlawan;

		$this->load->view("column_chart", $view_data);
    }

}
