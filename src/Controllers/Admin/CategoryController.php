<?php 

namespace Fpt\Duan1\Controllers\Admin;

use Fpt\Duan1\Controller;

use Fpt\Duan1\Models\Category;
use Fpt\Duan1\Models\Theloai;

class CategoryController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $categories = (new Category())->all();
        $the_loais = (new Theloai())->all();
        $this->renderAdmin("categories/index", ["categories" => $categories, "the_loais" => $the_loais]);
       
    }

    /* Thêm mới */
    public function create() {
        $the_loais = (new Theloai())->all();
        if (isset($_POST["btn-submit"])) { 
            $data = [
                'tensach' => $_POST['tensach'],
                'tacgia' => $_POST['tacgia'],
                'mota' => $_POST['mota'],
                'gia' => $_POST['gia'],
                'img' => $_FILES['img']['name'],
                'id_the_loai' => $_POST['id_the_loai']
            ];
            $target_dir = './upload/';
            $target_file = $target_dir . basename($_FILES['img']['name']);

            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                echo 'File đã được tải lên thành công.';
            } else {
                echo 'Có lỗi khi tải lên file.';
            }

            (new Category())->insert($data);

            header('Location: /admin/categories');
        }

        $this->renderAdmin("categories/create", [
            "the_loais" => $the_loais]);
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
                'img' => $_FILES['img']['name'],
                'id_the_loai' => $_POST['id_the_loai']
            ];
            $target_dir = './upload/';
            $target_file = $target_dir . basename($_FILES['img']['name']);

            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                echo 'File đã được tải lên thành công.';
            } else {
                echo 'Có lỗi khi tải lên file.';
            }

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