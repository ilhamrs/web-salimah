<?php

class List_Akun_Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/list_akun_admin");
	}
}