<?php function render_cate_edit($data) {  ?>
    <article class="center" style="height: 75vh;">
                  
            <h1 class="text-center m-5">ADD PRODUCT</h1>
            <form action="index.php?controller=category&action=edit&id=<?= $data['category_id'] ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name product</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?= $data['category_name']?>">
                    <div id="name" class="form-text" style="color: red">Tên không được để trống</div>
                </div>
               
             
                <div class="mb-3">
                    <label for="price" class="form-label">Description</label>
                    <input type="text" class="form-control" id="price" name="description" value="<?= $data['category_des']?>">
                    <div id="price" class="form-text" style="color: red">Giá không được để trống</div>
                </div>
              
        
                
                <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
                <a class="mx-2 px-3 py-2 bg-danger rounded-3 text-decoration-none text-white" href="list.php">home</a>
        
            </form>
        
        

           
            
        </article>
<?php } ?>