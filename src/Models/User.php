<?php

namespace Fpt\Duan1\Models;

use Fpt\Duan1\Model;

class User extends Model {
    protected $table = 'khachhang';
    protected $columns = [
        'ten',
        'email',
        'diachi',
        'matkhau',
    ];
}