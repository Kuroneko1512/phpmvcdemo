<?php
function render_giangvien_list($giangvien, $bomon) {
    ?>
    <main>
        <article class="center" style="height: 75vh;">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>GiangVien</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Add New </span>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Bộ Môn</th>
                            <th>Ảnh</th>
                            <th>Mô Tả</th>
                            <th>Lương</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($giangvien) && is_array($giangvien)) {
                            foreach ($giangvien as $key) {
                                ?>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td><?= $key['id'] ?></td>
                                    <td><?= $key['ten_bomon'] ?></td>
                                    <td>
                                        <img src="lib/img/<?= $key['anh'] ?>" style="width: 17%;" alt="">
                                    </td>
                                    <td><?= $key['mo_ta'] ?></td>
                                    <td><?= $key['Luong'] ?></td>
                                    <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                        </a>
                                        <a onclick=" return confirm('ok')
                                            "href="index.php?controller=giangvien&action=delete&id=<?= $key['id'] ?>" class="delete" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">Không có dữ liệu giảng viên.</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </article>
    </main>
    <?php
}
?>
