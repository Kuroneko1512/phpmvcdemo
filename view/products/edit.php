<?php function render_pro_edit($data,$data_cate) {  ?>
    <article class="center" style="height: 100vh;">
                  
                  <h1 class="text-center m-5">EDIT PRODUCT</h1>
                  <form action="index.php?controller=product&action=edit&id=<?= $data['product_id']?>" method="post" enctype="multipart/form-data">
                   
                      <div class="mb-3">
                          <label for="name" class="form-label">Name product</label>
                          <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?= $data['product_price']?>">
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
                             <?php foreach($data_cate as $key) {?>
                              <option  value="<?= $key['category_id']?>" <?= $key['category_id']=== $data['category_id'] ? 'selected' : '' ?>  ><?= $key['category_name']?></option>
                            <?php } ?>
                        
                          </select>
                         
                      </div>
              
                     
                      <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                      <a class="mx-2 px-3 py-2 bg-danger rounded-3 text-decoration-none text-white" href="list.php">home</a>
                  </form>
      
                 
                  
              </article>
<?php } ?>