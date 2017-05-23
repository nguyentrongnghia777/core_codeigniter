<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Base_Controller {

	public function __construct()
	{
		parent :: __construct();

		// Load model
		$this->load->model('dal/category_q_model');
		$this->load->model('dal/category_c_model');

		// Load library language
		$this->load->language('category_lang');
		$this->load->language('common_lang');
	}

	/**
	 * List category
	 */
	public function index() {

		// Get list category
		$list_cate = $this->category_q_model->get_list();
		$data['list_cate'] = $list_cate;

		// Load view
		$this->load->view('admin/category/index', $data);
	}

	/**
	 * Create category
	 */
	public function create() {

		// Load library
		$this->load->library('form_validation');
		$this->load->helper('form');

		// If user click submit
		if ($this->input->post()) {

			// Validate form input
			$this->form_validation->set_rules('name', 'Tên danh mục', 'required');
			$this->form_validation->set_rules('discription', 'Mô tả', 'required');

			// if not error form_validation, begin run
			if ($this->form_validation->run() == TRUE) {

				// Sent data
				$data = array(
					'name' => $this->input->post('name'),
					'discription' => $this->input->post('discription'),
					'active' => Constants_helper::CATEGORYS_ACTIVE
					);

				if ($this->category_c_model->create($data)) {

					// Redirect list page
					redirect(base_url('admin/category/index'));
				} else {
					return $this->session->set_flashdata('message', 'Tạo mới danh mục không thành công.');
				}
			} 
		}

		// Load view
		$message = $this->session->flashdata('message');
		$data['message'] = $message;
		$this->load->view('admin/category/create', $data);

	}

	/**
	 * Update category
	 */
	public function update($id = NULL) {

		// Check if user input id error
		if (!$id  || !is_numeric($id)) {
			show_404();
		}
		
		// Load library
		$this->load->library('form_validation');
		$this->load->helper('form');	

		// If user click submit
		if ($this->input->post()) {
			$data['post'] = $this->input->post();

			//validate form input
			$this->form_validation->set_rules('name', 'Tên danh mục', 'required');
			$this->form_validation->set_rules('discription', 'Phần mô tả cho danh mục', 'required');

			// if not error form_validation, begin run
			if ($this->form_validation->run()) {

				// Add data in Database
				$data = array(
					'name' => $this->input->post('name'),
					'discription' => $this->input->post('discription'),
				);

				if ($this->category_c_model->update($id, $data)) {
					
					// redirect list page
					redirect(base_url('admin/category'));
				} else {
					$this->session->set_flashdata('message', 'Cập nhật danh mục không thành công !');
				}
			}
		} else {
			// Get category by id
			$category = $this->category_q_model->get_category_by_id($id);
			if (!$category) {
				show_404();
			}

			$data['post']['name'] = $category->name;
			$data['post']['discription'] = $category->discription;
		}

		// Load view
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('admin/category/update', $data);
	}

	/**
	 * Delete category
	 */
	public function delete($id = NULL) {

		// Check if user input id error
		if (!$id  || !is_numeric($id)) {
			show_404();
		}

		// Request delete
		if ($this->category_c_model->delete($id)) {
			redirect(base_url('admin/category'));
		} else {
			$this->session->set_flashdata('message', 'Xóa dữ liệu không thành công.');
		}
	}
}