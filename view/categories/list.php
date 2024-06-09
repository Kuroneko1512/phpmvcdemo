<?php function render_cate_list($data,$pages) { ?>
    
<article class="center" style="height: 75vh;">


                  <div class="table-wrapper">
                      <div class="table-title">
                          <div class="row">
                              <div class="col-sm-6">
                                  <h2>Manage <b>categories</b></h2>
                              </div>
                              <div class="col-sm-6">
                                  <a href="index.php?controller=category&action=addview" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                              
                              </div>
                          </div>
                      </div>
                      <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                  <th>
                                      <span class="custom-checkbox">
                                          <!-- <input type="checkbox" id="selectAll">
                                          <label for="selectAll"></label> -->
                                      </span>
                                  </th>
                                  <th>Name</th>

                                  <th>description</th>
                               
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($data as $key ) { ?>
                              <tr>
                                  <td>
                                      <span class="custom-checkbox">
                                          <!-- <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                          <label for="checkbox1"></label> -->
                                      </span>
                                  </td>
                                  <td><?= $key['category_name'] ?></td>
                                  
                                  <td><?= $key['category_des'] ?></td>
                                 
                                  <td>
                                      <a href="index.php?controller=category&action=editview&id=<?= $key['category_id'] ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                      <a onclick=" return confirm('ok') " href="index.php?controller=category&action=delete&id=<?= $key['category_id'] ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                  </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                      <div class="clearfix">
                          <div class="hint-text">Showing <b>5</b> out of <b><?= $pages?></b> entries</div>
                          <ul class="pagination">
                              <li class="page-item <?= $_GET['page'] == 1 ? 'disabled' : '' ?>"><a href="index.php?controller=product&action=index&page=<?= $_GET['page'] - 1 ?>" class="page-link">Previous</a></li>
                              <?php for ($i = 1; $i <= $pages; $i++): ?>
                                <li class="page-item <?= $_GET['page'] == $i ? 'active' : '' ?>" ><a href="index.php?controller=product&action=index&page=<?= $i; ?>" class="page-link"><?= $i; ?></a></li>
                                   <?php endfor; ?>
                    
                              <li class="page-item"><a href="index.php?controller=product&action=index&page=<?= $_GET['page'] + 1 ?>" class="page-link">Next</a></li>
                          </ul>
                      </div>
                  </div>
                  
                  
          
                     
                      
                  </article>
<?php } ?>