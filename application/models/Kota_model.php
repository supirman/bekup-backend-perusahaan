<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends PModel {

	public function fields()
	{
        $this->nama = ORM::CharField(['max_length'=>255]);
	}

}

/* End of file Kota_model.php */
/* Location: ./application/models/Kota_model.php */