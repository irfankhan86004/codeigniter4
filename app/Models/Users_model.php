<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model {

    protected $table = 'users';


	
	public function getAllUser() {
		
		//
		$builder = $this->db->table('user');
        
		return $builder->get()->getResult();
	}
}
