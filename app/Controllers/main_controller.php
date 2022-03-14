<?php 

namespace App\Controllers;
use App\Models\NameModel;
use CodeIgniter\Controller;

class main_controller extends Controller {

    // public function index(){
    //     echo "works ";
    //     $NameModel = new NameModel();
    //     $data['users'] = $NameModel ->orderBy('id','name') ->findAll();
    //     return view('namelist',$data);
    // }
    public function store(){
        $NameModel = new NameModel();
        $data = [
            'name' =>$this ->request ->getVar('name'),
            'password' =>$this ->request ->getVar('password'),
        ];
        $NameModel ->insert($data);
        return $this ->responce->redirect(site_url('/namelist'));
        //  echo "store work";
    }
    public function insert(){
        
    }
    public function create (){
        return view('addname');
    }
    public function show(){
        echo "Show fn works ";
        $NameModel = new NameModel();
        $data['users'] = $NameModel ->orderBy('id','name') ->findAll();
        return view('namelist',$data);
    }
     // show single name
     public function singleUser($id = null){
        $NameModel = new NameModel();
        $data['user_obj'] = $NameModel->where('id', $id)->first();
        return view('editnames', $data);
    }
    // update name data
    public function update(){
        $NameModel = new NameModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'password'  => $this->request->getVar('password'),
        ];
        $NameModel->update($id, $data);
        return $this->response->redirect(site_url('/namelist'));
    }
    // delete name
    public function delete($id = null){
        $NameModel = new NameModel();
        $data['user'] = $NameModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/namelist'));
    }  
}
