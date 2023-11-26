<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Sản phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Cập nhật Category </h5>
                                </div>
                                <div class="card-block">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <label for="tensach">TÊN</label>
                                    <input type="text" name="tensach" class="form-control" value="<?= $category['tensach'] ?>">
                                    <label for="tacgia">TÁC GIẢ</label>
                                    <input type="text" name="tacgia" class="form-control" value="<?= $category['tacgia'] ?>">
                                    <label for="mota">MÔ TẢ</label>
                                    <input type="text" name="mota"  class="form-control" value="<?= $category['mota'] ?>">
                                    <label for="name">GIÁ</label>
                                    <input type="text" name="gia" class="form-control" value="<?= $category['gia'] ?>">
                                    <label for="name">HÌNH ẢNH</label>
                                    <img src="<?= $category['img'] ?>" height="80">
                                    <input type="file" name="img"  class="form-control" value="<?= $img ?>">
                                    <label for="id_the_loai">THỂ LOẠI</label>
                                        <select id="id_the_loai" name="id_the_loai">
                                            <?php foreach ($the_loais as $the_loai): ?>
                                                <option value="<?php echo $the_loai['id']; ?>" <?php echo ($category['id_the_loai'] == $the_loai['id']) ? 'selected' : ''; ?>>
                                                    <?php echo $the_loai['ten']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select><br>
                                    <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                    <a href="/admin/categories" class="btn btn-primary mt-3">Quay lại danh sách</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>