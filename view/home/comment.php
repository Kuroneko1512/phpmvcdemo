<?php function render_comment_details($id)
{ ?>

    <main>
      <div class="body">
        <div class="info-tab">
          <div class="nav-tabs">

            <a href="#" class="tab-link">Bình luận và đánh giá</a>
          </div>
          <div class="nav-tab-content">
            <div class="tab-pane tab-active tab-show" id="tab-pane-1">
              <form action="index.php?controller=comment&action=add&id=<?= $id ?>" method="post">
                <div class="form-group">
                  <textarea class="form-control" name="content"></textarea>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
          </div>
        </div>
    </main>
    <!-- </div> -->
  <?php } ?>
  <!-- Comments List -->
  <?php function render_comment($data_comment)
  { ?>
    <div class="comments">
      <?php foreach ($data_comment as $data) { ?>
      
        <main>
                    <div class="body">
                    <div class="info-tab">
                                
                                <div class="nav-tab-content">
                                    <div class="tab-pane tab-active tab-show" id="tab-pane-1">
                                      <div class="comment">
                                          <div class="comment-header">
                                              <div class="comment-author"><?= $data['user_name'] ?></div>
                                              <div class="comment-date"><?= $data['date_create'] ?></div>
                                          </div>
                                          <div class="comment-body">
                                              <p><?= $data['content'] ?></p>
                                          </div>
                                      </div>
                                        
                                    </div>
                                  
                                </div>
                            </div>
                    </div>
                </main>
   
      <?php } ?>
 
   
 

<?php } ?>