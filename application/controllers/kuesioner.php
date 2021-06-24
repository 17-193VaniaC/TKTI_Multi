<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {

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
        $this->load->model("kuesioner_model");
        $this->load->library('form_validation');
    }

	public function index()
    {
        if (isset($_POST['submit'])) {
            if(isset($_POST['process'])){
				$id_it_process = $_POST['process'];
				$data["pertanyaan"] = $id_it_process;
				print_r($data["pertanyaan"]);

				for ($i=0; $i < count($data["pertanyaan"]); $i++) { 
					$data["kuesioner"][$i] = $this->kuesioner_model->getLevel($id_it_process[$i]);
					$data["it_process"][$i] = $this->kuesioner_model->getAllById($id_it_process[$i]);

				}
				// print_r($data["kuesioner"][0]);
				// print_r($data["kuesioner"][$i]);
				print_r($data["it_process"][0]);


				// $data["kuesioner_level0"] = $this->kuesioner_model->getAll($id_it_process);
				// $data["kuesioner_level1"] = $this->kuesioner_model->getAll($id_it_process);
				// $data["kuesioner_level2"] = $this->kuesioner_model->getAll($id_it_process);
				// $data["kuesioner_level3"] = $this->kuesioner_model->getAll($id_it_process);
				// $data["kuesioner_level4"] = $this->kuesioner_model->getAll($id_it_process);
				// $data["kuesioner_level5"] = $this->kuesioner_model->getAll($id_it_process);
				$this->load->view('kuesioner', $data);
			}
        }
    }
}
