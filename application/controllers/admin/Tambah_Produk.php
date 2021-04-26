<?php

class Tambah_Produk extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/tambah_produk");
	}
}