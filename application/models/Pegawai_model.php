<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public $id_pegawai;
	public $nama;
	public $no_telp;
	public $kota;
	public $kelamin;
	public $id_posisi;
	public $status;

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */