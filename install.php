<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Custom_briefing_module extends App_Module_Base
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('client_briefing_model');
    }

    public function install()
    {
        // Crie a tabela no banco de dados usando o arquivo install.sql
        $this->load->dbforge();
        $this->db->query(file_get_contents(MODULES_PATH . 'custom_briefing/install.sql'));

        // Adicione a aba de briefing ao menu do cliente
        $this->db->insert('tblitems_in', [
            'name' => 'Briefing',
            'icon' => 'fa fa-comment',
            'path' => 'admin/clients/briefing',
            'module' => 'custom_briefing',
            'order' => 20
        ]);

        return true;
    }

    public function uninstall()
    {
        // Remova a tabela do banco de dados
        $this->load->dbforge();
        $this->dbforge->drop_table('tbl_client_briefing', true);

        // Remova a aba de briefing do menu do cliente
        $this->db->where('module', 'custom_briefing');
        $this->db->delete('tblitems_in');

        return true;
    }
}

