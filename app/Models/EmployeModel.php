<?php 
namespace App\Models;

class EmployeModel extends Model {
  
    protected $table ='employees';
    protected $id = 'id';
    protected $allowedFields =['name','mobile'];
    protected $useTimestamps =true ;
    protected $createdFields ='created_at';
    protected $updatedFields ='updated_at';
    protected $deletedFields ='deleted_at';
    protected $returnType = 'array';

    protected $validationRule = [
        'name' =>'required|alpha_numeric_space|min_lenght[4]',
        'mobile' =>'required|valid_number|is_unique[employee.mobile]'
    ];

    protected $validationMessage = [
        'mobile' => [
            'is_unique' =>'Mobile number has beeen  already taken',
            'required'  => 'mobile number required',
            'valid_number' => 'Valid Number Required',
         ]
    ];

}