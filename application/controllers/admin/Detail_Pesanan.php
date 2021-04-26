<?php

class Detail_Pesanan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/detail_pesanan");
	}
}