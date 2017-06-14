<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Controller {

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
	public function index()
	{
        $this->load->model('acara_model');
        $data['acara'] = $this->acara_model->read();
            
		$this->load->view('acara/index', $data);
	}
    
    public function create()
    {
        $data['action'] = 'home/do_create';
        $this->load->view('acara/form', $data);
    }
    
    public function do_create()
    {
        $input = $this->input->post(NULL, TRUE);
        
        $this->load->model('acara_model');
        $this->acara_model->create($input);
        redirect('home');
    }
    
    public function edit($id)
    {
        $this->load->model('acara_model');
        $result = $this->acara_model->read("id = '$id'");
        $result = $result[0];
        
        $data['result'] = $result;
        $data['action'] = 'home/do_edit/' . $id;
        $this->load->view('acara/form', $data);
    }
    
    public function do_edit($id)
    {
        $input = $this->input->post(NULL, TRUE);
        
        $this->load->model('acara_model');
        $this->acara_model->update("id = '$id'", $input);
        redirect('home');
    }
    
    public function delete($id)
    {
        $this->load->model('acara_model');
        $this->acara_model->delete("id = '$id'");
        redirect('home');
    }
}
