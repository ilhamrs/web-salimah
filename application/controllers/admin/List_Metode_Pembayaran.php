<?php

class List_Metode_Pembayaran extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/list_metode_pembayaran");
	}
}