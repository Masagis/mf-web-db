<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_model extends CI_Model
{
	public function getAllEmployes()
	{
		return $this->db->get('employee')->result_array();
	}

	public function addDataEmployee()
	{
		$data = [
			"name_employee" => $this->input->post('name_employee', true),
			"jobtitle" => $this->input->post('jobtitle', true),
			"salary" => $this->input->post('salary', true),
		];

		$this->db->insert('employee', $data);
	}

	public function delDataEmployee($id)
	{
		$this->db->delete('employee', ['id' => $id]);
	}

	public function getEmployeeByID($id)
	{
		return $this->db->get_where('employee', ['id' => $id])->row_array();
	}

	public function editDataEmployee()
	{
		$data = [
			"name_employee" => $this->input->post('name_employee', true),
			"jobtitle" => $this->input->post('jobtitle', true),
			"salary" => $this->input->post('salary', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('employee', $data);
	}

	public function searchEmployes()
	{
		$keyword = $this->input->post('keyword', true);

		$this->db->like('name_employee', $keyword);
		$this->db->or_like('jobtitle', $keyword);

		return $this->db->get('employee')->result_array();
	}
}
