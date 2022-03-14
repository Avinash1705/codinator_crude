<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class NameModel extends Model {

    protected $table = 'durc_table';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'password'];
}