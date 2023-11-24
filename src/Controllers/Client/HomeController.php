<?php

namespace Fpt\Duan1\Controllers\Client;

use Fpt\Duan1\Controller;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->render('client/home');
    }
}
