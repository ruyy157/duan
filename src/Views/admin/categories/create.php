<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category create</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Tạo mới Category</h1>

        <form action="" method="post">
            <label for="tensach">TÊN</label>
            <input type="text" name="tensach" class="form-control">
            <label for="tacgia">TÁC GIẢ</label>
            <input type="text" name="tacgia" class="form-control">
            <label for="mota">MÔ TẢ</label>
            <input type="text" name="mota"  class="form-control">
            <label for="name">GIÁ</label>
            <input type="text" name="gia" class="form-control">
            <label for="name">HÌNH ẢNH</label>
            <input type="file" name="img"  class="form-control">
            
            <label for="theloai">THỂ LOẠI</label>
            
            <select name="theloai">
                    <option value="">Tất cả</option>
                    <option value="">Văn Học</option>
                    <option value="">Giáo Dục</option>
                    <option value="">Khoa học-Viễn tưởng</option>
                    <option value="">Văn Học</option>
              
            </select>

            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/categories" class="btn btn-primary mt-3">Quay lại danh sách</a>
        </form>
    </div>
</body>

</html>