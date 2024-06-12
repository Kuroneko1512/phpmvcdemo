<?php function render_comment_list($data,$pages) { ?>
    <article class="center" style="height: 75vh;">
                  
                  <div class="table-wrapper">
                      <div class="table-title">
                          <div class="row">
                              <div class="col-sm-6">
                                  <h2>Manage <b>Product</b></h2>
                              </div>
                              <div class="col-sm-6">
                                  <a href="index.php?controller=product&action=addview" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                              
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
                                  <th>pass</th>
                                  <th>role</th>
                                  <th>status</th>
                                 
                               
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
                                  <td><?= $key['user_name'] ?></td>
                                  <td><?= $key['content'] ?></td>
                                  <td><?= $key['date_create'] ?></td>
                                  <td><?= $key['status'] != 1 ? 'ẩn' : 'hiện'?></td>
                                 
                                  <td>

                                    <a onclick=" return confirm('ok') " href="" class="delete" data-toggle="modal">
                                    <!-- index.php?controller=comment&action=ban&id=<?= $key['comment_id'] ?>&status=<?= $key['status'] != 0  ? 0 : 1?> -->
                                        
                                        <button type="button" class="btn btn-danger">
                                            <?= $key['status'] != 0 ?  'ban' :'unban' ?>
                                        </button>
                                   
                                    </a>
                                  </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                      <div class="clearfix">
                          <div class="hint-text">Showing <b>5</b> out of <b><?= $pages?></b> entries</div>
                          <ul class="pagination">
                              <li class="page-item <?= $_GET['page'] == 1 ? 'disabled' : '' ?>"><a href="index.php?controller=comment&action=index&page=<?= $_GET['page'] - 1 ?>" class="page-link">Previous</a></li>
                              <?php for ($i = 1; $i <= $pages; $i++): ?>
                                <li class="page-item <?= $_GET['page'] == $i ? 'active' : '' ?>" ><a href="index.php?controller=comment&action=index&page=<?= $i; ?>" class="page-link"><?= $i; ?></a></li>
                                   <?php endfor; ?>
                    
                              <li class="page-item"><a href="index.php?controller=comment&action=index&page=<?= $_GET['page'] + 1 ?>" class="page-link">Next</a></li>
                          </ul>
                      </div>
                  </div>
                  
                  
          
                     
                      
                  </article>
<?php } ?>