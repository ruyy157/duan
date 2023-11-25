<?php

namespace Fpt\Duan1\Models;

use Fpt\Duan1\Model;

class Category extends Model {
    protected $table = 'sach';
    protected $columns = [
        'tensach',
        'tacgia',
        'mota',
        'gia',
        'img',
        'id_the_loai'
    ];
}