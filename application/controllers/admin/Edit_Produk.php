<?php

class Edit_Produk extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/edit_produk");
	}
}