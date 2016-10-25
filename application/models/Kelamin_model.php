<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelamin_model extends PModel {

	public function fields()
	{
		$this->nama = ORM::CharField(['max_length'=>255]);
	}
	

}

/* End of file Kelamin_model.php */
/* Location: ./application/models/Kelamin_model.php */
