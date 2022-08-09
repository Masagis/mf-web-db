<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_model');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['employee'] = $this->Employee_model->getAllEmployes();
		if ($this->input->post('keyword')) {
			$data['employee'] = $this->Employee_model->searchEmployes();
		}

		$data['judul'] = 'Daftar Karyawan | BCA MF';
		$this->load->view('templates/header', $data);
		$this->load->view('employee/index');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		// $data['employee'] = $this->Employee_model->getAllEmployes();

		$data['judul'] = 'Form Data Karyawan | BCA MF';

		$this->form_validation->set_rules('name_employee', 'Name Employee', 'required');
		$this->form_validation->set_rules('jobtitle', 'Job Title', 'required');
		$this->form_validation->set_rules('salary', 'Salary', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('employee/add');
			$this->load->view('templates/footer');
		} else {
			$this->Employee_model->addDataEmployee();
			$this->session->set_flashdata('flash', 'ditambahkan!');
			redirect('employee');
		}
	}

	public function delete($id)
	{
		$this->Employee_model->delDataEmployee($id);
		$this->session->set_flashdata('flash', 'dihapus!');
		redirect('employee');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Karyawan | BCA MF';

		$data['employee'] = $this->Employee_model->getEmployeeByID($id);
		$this->load->view('templates/header', $data);
		$this->load->view('employee/detail', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		// $data['employee'] = $this->Employee_model->getAllEmployes();

		$data['judul'] = 'Edit Data Karyawan | BCA MF';
		$data['employee'] = $this->Employee_model->getEmployeeByID($id);

		$this->form_validation->set_rules('name_employee', 'Name Employee', 'required');
		$this->form_validation->set_rules('jobtitle', 'Job Title', 'required');
		$this->form_validation->set_rules('salary', 'Salary', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('employee/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Employee_model->editDataEmployee();
			$this->session->set_flashdata('flash', 'diubah!');
			redirect('employee');
		}
	}
}
