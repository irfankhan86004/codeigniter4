<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model {

    protected $table = 'user';
	protected $allowedFields = ['name', 'email','status' ,'password'];


	
	public function getAllUser() {
		
		//
		$builder = $this->db->table('user');
        
		return $builder->get()->getResult();
	}
}
