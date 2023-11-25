<?php

namespace Fpt\Duan1\Controllers\Admin;

use Fpt\Duan1\Controller;

class DashboardController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {        
        $this->renderAdmin('dashboard');
    }
}
