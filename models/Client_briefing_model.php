<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_briefing_model extends App_Model {
    protected $table = 'tbl_client_briefing';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = [
        'client_id',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7',
        'question_8',
        'question_9',
        'question_10',
        'question_11',
        'question_12',
        'question_13',
        'question_14',
        'question_15',
        'question_16',
        'question_17',
        'question_18',
        'question_19',
        'question_20',
        // Adicione mais campos para cada pergunta do briefing
    ];
}
