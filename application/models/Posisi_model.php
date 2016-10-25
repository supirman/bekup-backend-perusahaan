<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi_model extends PModel {
	public function fields()
	{
        $this->nama = ORM::CharField(['max_length'=>255]);
	}
}

/* End of file Posisi_model.php */
/* Location: ./application/models/Posisi_model.php */