<?php function render_pro_edit($data,$data_cate) {  ?>
    <main>       
        <article class="center" style="height: 100vh;">

            <h1 class="text-center m-5">EDIT PRODUCT</h1>
            <form action="index.php?controller=product&action=edit&id=<?= $data['product_id']?>" method="post" enctype="multipart/form-data">
            
                <div class="mb-3">
                    <label for="name" class="form-label">Name product</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?= $data['product_name']?>">
                    <div id="name" class="form-text" style="color: red">Tên không được để trống</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price product</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?= $data['product_price']?>">
                    <div id="price" class="form-text" style="color: red">Giá không được để trống</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="price" name="quantity" value="<?= $data['product_quantity']?>">
                    <div id="price" class="form-text" style="color: red">Giá không được để trống</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Description</label>
                    <input type="text" class="form-control" id="price" name="description" value="<?= $data['product_price']?>">
                    <div id="price" class="form-text" style="color: red">Giá không được để trống</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">category</label>
                    <select  class="form-select" name="category" id="" value=>
                        <?php foreach($data_cate as $d) {?>
                        <option  value="<?= $d['category_id']?>" <?= $d['category_id']=== $data['category_id'] ? 'selected' : '' ?>  ><?= $d['category_name']?></option>
                    <?php } ?>
                
                    </select>
                    
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image product</label>
                    <img src="lib/img/<?= $data['product_img'] ?>" style="width: 80px;"  alt="" >
                    <input type="file" class="form-control" id="image" name="image">
                    <div id="image" class="form-text" style="color: red">Ảnh không được để trống</div>
                </div>
        
                
                <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                <button class="btn btn-primary" href="?controller=product&action=index&page=1">home</button>
            </form>

        </article>

    </main> 
<?php } ?>