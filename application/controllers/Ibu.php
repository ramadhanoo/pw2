<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model("ibu_model");
    }

	public function index()
	{
		redirect("ibu/read");
	}

	public function read()
	{
		$daftar_ibu = $this->ibu_model->read();

		$view_data = array();
		$view_data['daftar_ibu'] = $daftar_ibu;

		$this->load->view("ibu_read", $view_data);
	}

	public function insert($view_data=array()) 
	{
		$this->load->view("ibu_insert");
	}

	public function insert_action() 
	{	
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('umur_ibu', 'Umur Ibu', 'required|numeric');

        //validasi input benar
        if ($this->form_validation->run() == TRUE) 
        {
        	//setting upload
        	$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['overwrite']           = TRUE;
            $this->load->library('upload', $config);

            //validasi foto salah
            if ( !$this->upload->do_upload('userfile'))
            {	
                $view_data = array('error' => $this->upload->display_errors());
                $this->load->view('ibu_insert', $view_data);

            //validasi foto benar
            } else {
                $upload_data = $this->upload->data();
                $file_foto_ibu = $upload_data['file_name'];

                $insert_data = array();
				$insert_data['nama_ibu'] = $this->input->post("nama_ibu");
				$insert_data['umur_ibu'] = $this->input->post("umur_ibu");
				$insert_data['foto_ibu'] = $file_foto_ibu;

				$this->ibu_model->insert($insert_data);

				redirect("ibu/read");
            }

		} 
		else 
		{
			$this->insert();
		}

		
	}

	public function update($id_ibu) 
	{
		$data_ibu = $this->ibu_model->read_single($id_ibu);

		$view_data = array();
		$view_data['data_ibu'] = $data_ibu;

		$this->load->view('ibu_update', $view_data);
	}

	public function update_action($id_ibu) 
	{	
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|alpha');
        $this->form_validation->set_rules('umur_ibu', 'Umur Ibu', 'required|numeric');

        if ($this->form_validation->run() == TRUE) 
        {
			$update_data = array();
			$update_data['nama_ibu'] = $this->input->post("nama_ibu");
			$update_data['umur_ibu'] = $this->input->post("umur_ibu");
		
			$this->ibu_model->update($id_ibu, $update_data);

			redirect("ibu/update/".$id_ibu);
		} 
		else 
		{
			$this->update($id_ibu);
		}
	}

	public function delete_action($id_ibu) 
	{	
		$this->ibu_model->delete($id_ibu);
		redirect("ibu/read");
	}

}
