<?php

class List_Pesanan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/list_pesanan");
	}
}