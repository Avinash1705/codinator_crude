<?php
namespace App\Controllers;
// defined('http://localhost:8080/') OR exit('No direct script access allowed ');

class my_control extends BaseController {
    public function index(){
        // return view('my_view');
        echo "works ";
        // $this-> load->view('my_view'); 
        $data = [
            "page_title" => "codinator 4 "
        ];
        // echo view('my_view',$data);
        return view('my_view',$data);

    }
    public function dataGet(){
        $db = \Config\Database::connect();
    //    print_r($db);
       //by query
        $query = $db ->query('select * from trendingtable');
       //save data 
       $result['rrrrr'] = $query->getResult();
       print_r($result);
       return view('my_view',$result);
    // echo $result['testKey'];
    // return view('my_view');
    }

    public function insertDb (){
        $db = \Config\Database::connect();
        $query = $db ->query("INSERT INTO 'trendingtable'('id', 'name', 'date', 'img', 'header')
                                     VALUES ('1','1','1','1','1')");
        $result =mysqli() ;

        }
}
