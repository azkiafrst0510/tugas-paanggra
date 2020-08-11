<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Custom6 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Custom6_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'custom6/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'custom6/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'custom6/index.html';
            $config['first_url'] = base_url() . 'custom6/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Custom6_model->total_rows($q);
        $custom6 = $this->Custom6_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'custom6_data' => $custom6,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('custom6/custom6_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Custom6_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'status' => $row->status,
		'alamat' => $row->alamat,
		'nmrtelpon' => $row->nmrtelpon,
		'email' => $row->email,
	    );
            $this->load->view('custom6/custom6_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('custom6'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('custom6/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'status' => set_value('status'),
	    'alamat' => set_value('alamat'),
	    'nmrtelpon' => set_value('nmrtelpon'),
	    'email' => set_value('email'),
	);
        $this->load->view('custom6/custom6_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'status' => $this->input->post('status',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'nmrtelpon' => $this->input->post('nmrtelpon',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );

            $this->Custom6_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('custom6'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Custom6_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('custom6/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'status' => set_value('status', $row->status),
		'alamat' => set_value('alamat', $row->alamat),
		'nmrtelpon' => set_value('nmrtelpon', $row->nmrtelpon),
		'email' => set_value('email', $row->email),
	    );
            $this->load->view('custom6/custom6_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('custom6'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'status' => $this->input->post('status',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'nmrtelpon' => $this->input->post('nmrtelpon',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );

            $this->Custom6_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('custom6'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Custom6_model->get_by_id($id);

        if ($row) {
            $this->Custom6_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('custom6'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('custom6'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('nmrtelpon', 'nmrtelpon', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Custom6.php */
/* Location: ./application/controllers/Custom6.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-08-11 11:16:43 */
/* http://harviacode.com */