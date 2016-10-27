<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends MY_Model {

	public $id;
	public $nama;

    protected $__table = 'kota';

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file Kota_model.php */
/* Location: ./application/models/Kota_model.php */