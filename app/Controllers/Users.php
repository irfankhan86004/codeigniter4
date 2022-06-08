<?php

namespace App\Controllers;

use App\Models\Users_model;

class Users extends BaseController
{
    public function index()
    {
		return view('welcome_message');
    }
	
	public function listing()
    {
		$users_model = new Users_model();
		//$users_model->getAllUser();
		
		echo 'ed';exit;
        
    }
}
