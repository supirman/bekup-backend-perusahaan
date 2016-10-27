<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi_model extends MY_Model {

	public $id_posisi;
	public $nama;

    protected $__table = 'posisi';

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file Posisi_model.php */
/* Location: ./application/models/Posisi_model.php */