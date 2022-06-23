<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model {

    protected $table = 'user';
	protected $allowedFields = ['name', 'email','status' ,'password','image'];


	
	public function getAllUser() {
		
		//
		$builder = $this->db->table('user');
      
        if (isset($_POST['search']) && !empty($_POST['search'])) {
            $builder->like('name',$_POST['search']);
        }
        


		return $builder->orderBy('name', 'ASC')->get()->getResult();
	}


   }