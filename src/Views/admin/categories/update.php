<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category UPdate</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Cập nhật Category</h1>
        <form action="" method="post">
            <label for="tensach">TÊN</label>
            <input type="text" name="tensach" class="form-control" value="<?= $category['tensach'] ?>">
            <label for="tacgia">TÁC GIẢ</label>
            <input type="text" name="tacgia" class="form-control" value="<?= $category['tacgia'] ?>">
            <label for="mota">MÔ TẢ</label>
            <input type="text" name="mota"  class="form-control" value="<?= $category['mota'] ?>">
            <label for="name">GIÁ</label>
            <input type="text" name="gia" class="form-control" value="<?= $category['gia'] ?>">
            <label for="name">HÌNH ẢNH</label>
            <input type="file" name="img"  class="form-control" value="<?=$img ?>">
            <label for="id_the_loai">THỂ LOẠI</label>
                    <select id="id_the_loai" name="id_the_loai">
                        <?php 
                        foreach ($the_loais as $the_loai): ?>
                        <option value="<?php echo $the_loai['id']; ?>"><?php echo $the_loai['ten']; ?></option>
                        <?php endforeach; ?>
                    </select><br>

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/categories" class="btn btn-primary mt-3">Quay lại danh sách</a>
        </form>
    </div>
</body>

</html>