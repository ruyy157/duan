<?php 

namespace Fpt\Duan1\Controllers\Admin;

use Fpt\Duan1\Controller;

use Fpt\Duan1\Models\Category;
use Fpt\Duan1\Models\Theloai;

class CategoryController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $categories = (new Category())->all();
        $this->renderAdmin("categories/index", ["categories" => $categories]);
    }

    /* Thêm mới */
    public function create() {
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'tensach' => $_POST['tensach'],
                'tacgia' => $_POST['tacgia'],
                'mota' => $_POST['mota'],
                'gia' => $_POST['gia'],
                'img' => $_POST['img'],
                
            ];

            (new Category())->insert($data);

            header('Location: /admin/categories');
        }

        $this->renderAdmin("categories/create");
    }

    
    /* Cập nhật */
    public function update() {
        $the_loais = (new Theloai())->all();
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'tensach' => $_POST['tensach'],
                'tacgia' => $_POST['tacgia'],
                'mota' => $_POST['mota'],
                'gia' => $_POST['gia'],
                'img' => $_POST['img'],
                'id_the_loai' => $_POST['id_the_loai']
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Category())->update($data, $conditions);
        }

        $category = (new Category())->findOne($_GET["id"]);

        $this->renderAdmin("categories/update", [
            "the_loais" => $the_loais, "category" => $category
        ]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Category())->delete($conditions);

        header('Location: /admin/categories');
    }
}