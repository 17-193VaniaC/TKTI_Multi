<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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

    public function __construct()
    {
        parent::__construct();
        $this->load->model("perusahaan_model");
        $this->load->model("domain_model");
        $this->load->model("resource_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data["perusahaan"] = $this->perusahaan_model->getAll();
        $data["domain"] = $this->domain_model->getAll();
        $data["resource"] = $this->resource_model->getAll();
		$this->load->view('form', $data);
	}
}
