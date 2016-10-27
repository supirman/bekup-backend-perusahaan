<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelamin_model extends MY_Model {

	public $id;
	public $nama;

    protected $__table = 'kelamin';

	public function __construct()
	{
		parent::__construct();
		
	}


}

/* End of file Kelamin_model.php */
/* Location: ./application/models/Kelamin_model.php */