<?php

namespace App\Models;

use CodeIgniter\Model;

class Images_model extends Model {

    protected $table = 'images';

	
	public function getAllUserImages() {
		
		
		$builder = $this->db->table('images');
        $builder->select('images.*');
		
        $builder->join('user', 'user.id = images.id_user');
		
        return $builder->get()->getResult();
	}
}
