<?php

namespace Fpt\Duan1\Controllers\Admin;

use Fpt\Duan1\Controller;
use Fpt\Duan1\Models\Theloai;

class TheloaiController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $theloai = (new Theloai)->all();
        
        $this->renderAdmin('theloai/index', ['theloai' => $theloai]);
    }
}