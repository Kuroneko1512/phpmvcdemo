<?php function render_user_list($data,$pages) { ?>
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
                                  <th>content</th>
                                  <th>day</th>
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
                                  <td><?= $key['username'] ?></td>
                                  <td><?= $key['password'] ?></td>
                                  <td><?= $key['role'] ?></td>
                                  <td><?= $key['role'] != 2 ? 'Work' : 'ban'?></td>
                                 
                                  <td>

                                      <a onclick=" return confirm('ok') " href="index.php?controller=user&action=ban&id=<?= $key['user_id'] ?>&role=<?= $key['role'] != 2  ? 2 : ($key['role'] ==1 ? 1 : 0 )?>" class="delete" data-toggle="modal">
                                      <?php if($key['role'] == 1) {?>
                                        <?php } else {?>
                                       <button type="button" class="btn btn-danger">
                                        <?= $key['role'] != 2 ?  'ban' :'unban' ?>
                                    </button>
                                    <?php } ?>
                                </a>
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