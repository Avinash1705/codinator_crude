<?php

namespace App\Controllers;
use \CodeIgiter\Controller;
use App\Models\EmployeeModel;

class Employee extends BaseController {
    public $empModel;
    public function _construct(){
        helper("form");
        $this ->empModel = new EmployeModel(); 
    }
    public function index(){
        echo "works Emp";
    } 
    public function addEmp(){
        if($this ->request ->getMethod() == 'post'){    
            $data = [
                    'name' =>$this->request->getVar('name',FILTER_SANITISE_STRING),
                    'mobile'=>$this ->request ->getVar('mobile'),
            ];
            if($this ->empModel->save($data) === true){
                echo "success";
            }
        }
        return view('empadd_view',['errors' =>$this->empModel ->errors()]);
    }
    public function viewEmp(){
        
    }
    public function editEmp($id = null){

    }
    public function deleteEmp(){

    }
}

