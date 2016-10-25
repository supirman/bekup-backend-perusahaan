<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends PModel {

	public function fields()
	{
	    $this->nama = ORM::CharField(['max_length'=>255]);
		$this->no_telp = ORM::CharField(['max_length'=>25]);
		$this->kota = ORM::ForeignKey(['model'=>'kota']);
		$this->kelamin = ORM::ForeignKey(['model'=>'kelamin']);
		$this->posisi = ORM::ForeignKey(['model'=>'posisi']);
		$this->status = ORM::IntField();
	}

}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */