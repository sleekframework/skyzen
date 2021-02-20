<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'password', 'is_active', 'created_at', 'updated_at'];
}
