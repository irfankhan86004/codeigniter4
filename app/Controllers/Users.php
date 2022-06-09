<?php

namespace App\Controllers;

use App\Models\Users_model;
use App\Models\Images_model;

class Users extends BaseController
{
    public function index()
    {
		return view('welcome_message');
    }
	
	public function listing()
    {
		$users_model = new Users_model;
		
		$data = $users_model->getAllUser();
		
		echo '<pre>';
		print_R($data);exit;
        
    }
	
	public function user_images()
    {
		$images_model = new Images_model;
		
		$data = $images_model->getAllUserImages();
		
		echo '<pre>';
		print_R($data);exit;
        
    }
}
