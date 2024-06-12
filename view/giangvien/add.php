<?php function render_giangvien_add($bomon)
{ ?>
    <main>
        <article class="center" style="height: 75vh;">

            <h1 class="text-center m-5">ADD NEW</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <!-- <div class="mb-3">
                    <label for="name" class="form-label">Bộ Môn</label>
                    <input type="text" class="form-control" id="bomon" name="bomon" aria-describedby="bomon">
                    <div id="name" class="form-text" style="color: red">Tên không được để trống</div>
                </div> -->
                <!-- <div class="mb-3">
                    <label for="price" class="form-label">Price product</label>
                    <input type="number" class="form-control" id="price" name="price">
                    <div id="price" class="form-text" style="color: red">Giá không được để trống</div>
                </div> -->
                <div class="mb-3">
                    <label for="price" class="form-label">Lương</label>
                    <input type="number" class="form-control" id="price" name="luong">
                    <div id="price" class="form-text" style="color: red">Giá không được để trống</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Mô Tả</label>
                    <input type="text" class="form-control" id="description" name="mota">
                    <div id="price" class="form-text" style="color: red">Giá không được để trống</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Bộ Môn</label>
                    <select class="form-select" name="bomon" id="">
                        <?php foreach ($bomon as $value) { ?>
                            <option value="<?= $value['id_bomon'] ?>"><?= $value['ten_bomon'] ?></option>
                        <?php } ?>
                    </select>

                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Ảnh</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <div id="image" class="form-text" style="color: red">Ảnh không được để trống</div>
                </div>
                <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                <button class="btn btn-primary"  href="?controller=giangvien&action=index&page=1">home</button>

            </form>
        </article>
    </main>
<?php } ?>