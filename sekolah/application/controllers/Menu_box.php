<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_box extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_box_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'menu_box/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'menu_box/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'menu_box/index.html';
            $config['first_url'] = base_url() . 'menu_box/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Menu_box_model->total_rows($q);
        $menu_box = $this->Menu_box_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'menu_box_data' => $menu_box,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('menu_box/menu_box_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Menu_box_model->get_by_id($id);
        if ($row) {
            $data = array(
		'status_box' => $row->status_box,
		'id' => $row->id,
		'nama_box' => $row->nama_box,
		'ket_box' => $row->ket_box,
	    );
            $this->load->view('menu_box/menu_box_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu_box'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('menu_box/create_action'),
	    'status_box' => set_value('status_box'),
	    'id' => set_value('id'),
	    'nama_box' => set_value('nama_box'),
	    'ket_box' => set_value('ket_box'),
	);
        $this->load->view('menu_box/menu_box_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'status_box' => $this->input->post('status_box',TRUE),
		'nama_box' => $this->input->post('nama_box',TRUE),
		'ket_box' => $this->input->post('ket_box',TRUE),
	    );

            $this->Menu_box_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('menu_box'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Menu_box_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('menu_box/update_action'),
		'status_box' => set_value('status_box', $row->status_box),
		'id' => set_value('id', $row->id),
		'nama_box' => set_value('nama_box', $row->nama_box),
		'ket_box' => set_value('ket_box', $row->ket_box),
	    );
            $this->load->view('menu_box/menu_box_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu_box'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'status_box' => $this->input->post('status_box',TRUE),
		'nama_box' => $this->input->post('nama_box',TRUE),
		'ket_box' => $this->input->post('ket_box',TRUE),
	    );

            $this->Menu_box_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('menu_box'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Menu_box_model->get_by_id($id);

        if ($row) {
            $this->Menu_box_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('menu_box'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu_box'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('status_box', 'status box', 'trim|required');
	$this->form_validation->set_rules('nama_box', 'nama box', 'trim|required');
	$this->form_validation->set_rules('ket_box', 'ket box', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Menu_box.php */
/* Location: ./application/controllers/Menu_box.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-08-11 11:16:43 */
/* http://harviacode.com */