<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category List</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Category List</h1>

        <a href="/admin/categories/create" class="btn btn-info">Thêm</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>TÊN SÁCH</th>
                <th>TÁC GIẢ</th>
                <th>MÔ TẢ</th>
                <th>GIÁ</th>
                <th>ẢNH</th>
                <th>THỂ LOẠI</th>
            </tr>

            <?php foreach ($categories as $category) : ?>
                <tr>
                    <td><?= $category['id'] ?></td>
                    <td><?= $category['tensach'] ?></td>
                    <td><?= $category['tacgia'] ?></td>
                    <td><?= $category['mota'] ?></td>
                    <td><?= $category['gia'] ?></td>
                    <td><?= $category['img'] ?></td>
                    <td><?= $category['id_the_loai'] ?></td>
                    <td>
                        <a href="/admin/categories/update?id=<?= $category['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                        
                        <form action="/admin/categories/delete?id=<?= $category['id'] ?>" method="post">
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" 
                                                    class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>