<?php

class Edit_Metode_Pembayaran extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/edit_metode_pembayaran");
	}
}