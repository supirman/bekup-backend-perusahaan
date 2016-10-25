<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends PModel {
	public function fields()
	{
		$nama = ORM::CharField(['max_length'=>255]);
	}
}

/* End of file Posisi.php */
/* Location: ./application/models/Posisi.php */