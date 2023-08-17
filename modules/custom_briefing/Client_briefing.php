<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_briefing extends AdminController {
    public function __construct() {
        parent::__construct();
        $this->load->model('client_briefing_model');
    }

    public function index($client_id) {
        $data['client_id'] = $client_id;
        $data['client_briefing'] = $this->client_briefing_model->where('client_id', $client_id)->first();
        $this->load->view('admin/clients/tabs_content/briefing', $data);
    }

    public function save($client_id) {
        $data = [
            'client_id' => $client_id,
            'question_1' => $this->input->post('question_1'),
            'question_2' => $this->input->post('question_2'),
            'question_3' => $this->input->post('question_3'),
            'question_4' => $this->input->post('question_4'),
            'question_5' => $this->input->post('question_5'),
            'question_6' => $this->input->post('question_6'),
            'question_7' => $this->input->post('question_7'),
            'question_8' => $this->input->post('question_8'),
            'question_9' => $this->input->post('question_9'),
            'question_10' => $this->input->post('question_10'),
            'question_11' => $this->input->post('question_11'),
            'question_12' => $this->input->post('question_12'),
            'question_13' => $this->input->post('question_13'),
            'question_14' => $this->input->post('question_14'),
            'question_15' => $this->input->post('question_15'),
            'question_16' => $this->input->post('question_16'),
            'question_17' => $this->input->post('question_17'),
            'question_18' => $this->input->post('question_18'),
            'question_19' => $this->input->post('question_19'),
            'question_20' => $this->input->post('question_20'),
        ];

        $this->client_briefing_model->updateOrCreate(['client_id' => $client_id], $data);

        redirect(admin_url('clients/view/' . $client_id . '#briefing'));
    }
}
