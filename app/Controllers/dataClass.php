<?php 
namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\my_model;
class dataClass extends Controller {
    public function index(){
            $userModel = new my_model();
            // $userModel ->dataModel();
            // print_r($userModel);
            //printing key
            $data['subjects'] = $userModel ->dataModel();
            // print_r($data['subjects']);

            return view('my_view',$data); 
            // return('my_view');  
    }
}