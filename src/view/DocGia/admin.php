<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div class="">
                <p><?php echo isset($_GET['tt']) ? $_GET['tt'] : ''?></p>
            </div>
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3>Hệ thống quản lý thư viện</h3>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=DocGia&action=add"><button class="btn btn-primary">Thêm độc giả</button></a>
            </div>
            <div class="col-md-12 ms-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã độc giả</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nghề nghiệp</th>
                            <th scope="col">Ngày cấp thẻ</th>
                            <th scope="col">Ngày hết hạn</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bdonor as $bd) {
                            $urlEdit =
                            "index.php?controller=DocGia&action=edit&id=" . $bd['madg'];
                            $urlDelete =
                            "index.php?controller=DocGia&action=delete&id=" . $bd['madg'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $bd['madg'] ?></th>
                                <td><?php echo $bd['hovaten'] ?></td>
                                <td><?php echo $bd['gioitinh'] ?></td>
                                <td><?php echo $bd['naminh'] ?></td>
                                <td><?php echo $bd['nghenghiep'] ?></td>
                                <td><?php echo $bd['ngaycapthe'] ?></td>
                                <td><?php echo $bd['ngayhethan'] ?></td>
                                <td><?php echo $bd['diachi'] ?></td>
                            
                                <td><a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo $urlDelete ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>