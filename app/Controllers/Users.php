<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Users_model;
use App\Models\Images_model;
ini_set('display_errors', '1');


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

		// echo '<pre>';
		// print_R($data);exit;
		return view('list', ['records'=>$data]);
        
    }
	
	public function user_images()
    {
		$images_model = new Images_model;
		
		$data = $images_model->getAllUserImages();
		
		// echo '<pre>';
		// print_R($data);exit;
		return view('list_image',['records'=>$data]);
        
    }
		// to insert data





	public function delete($id=null)
	 {
		$users_model = new Users_model;
		//$users_model->delete($num);
		
		$users_model->where('id', $id)->delete();
		return redirect()->to( base_url('users/list') );
		//print_R($id);exit;
		
		
	  }


	  public function edit($id)		

		{
	$users_model = new Users_model;
 		 $data['row'] = $users_model->where('id', $id)->first();
		  // print_R($data);exit;
  		return view('update',$data);
		}


		public function remove($id=null)
	 {
		$images_model = new Images_model;
		$images_model->where('id',$id)->delete();
    	//print_R($id);exit;
		return redirect()->to( base_url('user-images/list_image'));
		
	  }

		public function load($id)
		{
			$images_model = new Images_model;
			$data['row'] = $images_model->where('id', $id)->first();
			//print_R($id);exit;
			return view('update_images',$data);
		}


	public function update() {
	
		$users_model = new Users_model;
		$id = $this->request->getVar('id');
		$data=[
			'name' => $this->request->getVar('name'),
		 	'email' => $this->request->getVar('email'),
		 	'status' => $this->request->getVar('status'),
		 	'password' => $this->request->getVar('password'),
		
		 ];
		 //print_R($data);exit;
		 
		 $return =  $users_model->where('id', $id)->set($data)->update();
		 if($return) {
	 	 return redirect()->to( base_url('users/list') );
	 	}
			
		
		
	}

public function updateImage()
{  

 $images_model = new images_model;
 $id = $this->request->getVar('id');

 $data = [
	 'id_user'  => $this->request->getVar('id_user'),
	 'name' => $this->request->getVar('name'),
	 ];


   $return =  $images_model->where('id', $id)->set($data)->update();
	//print_R($data);exit;
  if($return) {
	return redirect()->to( base_url('user-images/list_image'));

 }
}
// TO INSERT DATA IN USER TABLE
public function create()
{
 return view('create');
}
 
public function store()
{
	$users_model = new Users_model;
	$data=[
		'name' => $this->request->getVar('name'),
		 'email' => $this->request->getVar('email'),
		 'status' => $this->request->getVar('status'),
		 'password' => $this->request->getVar('password'),
	
	 ];
	// print_r($data);exit;
	 $users_model->save($data);
	 return redirect()->to( base_url('users/list') );

}


//  // TO INSERT DATA IN IMAGE TABLE



public function show()
{
	return view('createimage');
}

public function save()
{
	$images_model = new Images_model;

	$data = [
		'id_user'  => $this->request->getVar('id_user'),
		'name' => $this->request->getVar('name'),
		];
		
		$images_model->save($data);
		return redirect()->to( base_url('user-images/list_image'));

}



}



