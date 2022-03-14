<?php 
namespace  App\Models;
use CodeIgniter\Model;
class my_model extends Model{
    public function dataModel(){
   
    $subjects = 
    [
        [ 'name' => 'monke', 'class' => 'bk' ],
        [    'name' =>'yas','class' => 'range' ]
    ];
        return $subjects;
    }
}