<?php

namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model 
{
  protected $table = 'users';
  protected $allowedFields = [
    'firstname',
    'username',
    'password',
    'created_at'
]
}