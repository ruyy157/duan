<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>User</h5>
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
                                    <h5>Cập nhật </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post">
                                        <label for="ten">Name</label>
                                        <input type="text" name="ten" class="form-control" value="<?= $user['ten'] ?>">

                                        <label for="email" class="mt-3">Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>">

                                        <label for="matkhau" class="mt-3">Password</label>
                                        <input type="password" name="matkhau" class="form-control" value="<?= $user['matkhau'] ?>">

                                        <label for="diachi" class="mt-3">Address</label>
                                        <input type="text" name="diachi" class="form-control" value="<?= $user['diachi'] ?>">

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/users" class="btn btn-primary mt-3">Quay lại danh sách</a>
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