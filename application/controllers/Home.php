<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->model('muzaki_model');
        $data['muzaki'] = $this->muzaki_model->read();
            
		$this->load->view('index', $data);
	}
    
    public function create()
    {
        $this->load->view('form');
    }
    
    public function do_create()
    {
        $input = $this->input->post(NULL, TRUE);
        
        $this->load->model('muzaki_model');
        $this->muzaki_model->create($input);
        redirect('home');
    }
    
    public function edit()
    {
        
    }
    
    public function do_edit()
    {
        
    }
    
    public function delete($id)
    {
        $this->load->model('muzaki_model');
        $this->muzaki_model->delete("id = '$id'");
        redirect('home');
    }
}
