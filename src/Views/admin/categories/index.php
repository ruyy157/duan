<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Sản Phẩm</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Sản phẩm</a> </li>
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
                                    <h5>Danh sách sản phẩm</h5>

                                    <a href="/admin/categories/create" class="btn btn-info">Thêm</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>TÊN SÁCH</th>
                                                <th>TÁC GIẢ</th>
                                                <th>MÔ TẢ</th>
                                                <th>GIÁ</th>
                                                <th>ẢNH</th>
                                                <th>THỂ LOẠI</th>
                                                <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                                foreach ($categories as $category) :
                                                    $imgPath = "./upload/" . $category['img'];
                                                    if (is_file($imgPath)) {
                                                        $img = "<img src='" . $imgPath . "' height='80'>";
                                                    } else {
                                                        $img = "Ảnh không tồn tại";
                                                    }
                                                ?>
                                                    <tr>
                                                    <td><?= $category['id'] ?></td>
                                                    <td><?= $category['tensach'] ?></td>
                                                    <td><?= $category['tacgia'] ?></td>
                                                    <td><?= $category['mota'] ?></td>
                                                    <td><?= $category['gia'] ?></td>
                                                    <td><?= $img; ?></td>
                                                    
                                                    <?php 
                                                        foreach ($the_loais as $the_loai): ?>
                                                    <?php if ($category['id_the_loai'] == $the_loai['id']): ?>
                                                    <td><?= $the_loai['ten'] ?></td>
                                                    <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    
                                                    <td>
                                                        <a href="/admin/categories/update?id=<?= $category['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                                                        
                                                        <form action="/admin/categories/delete?id=<?= $category['id'] ?>" method="post">
                                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" 
                                                                                    class="btn btn-danger btn-sm">Xóa</button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
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
</div>
