<?php 
session_start();
require "../db.php";




require '../dashboard_parts/header.php'; ?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Works</a>
        <span class="breadcrumb-item active">Add work </span>
    </nav>
    
    <div class="sl-pagebody">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto" >
                  <div class="card">
                      <div class="card-header bg-primary">
                          <h3>Add Work</h3>
                      </div>
                      <div class="card-body">
                          <form action="work_post.php" method="POST" enctype="multipart/form-data">
                              <div class="mt-3">
                                  <label for="" class="form-label">Title</label>
                              <input type="text" class="form-control" name="title">
                              </div>
                              <div class="mt-3">
                                  <label for="" class="form-label">Category</label>
                              <input type="text" class="form-control" name="category">
                              </div>
                              
                              <div class="mt-3">
                                  <label for="" class="form-label">Description</label>
                              <input type="text" class="form-control" name="desp">
                              </div>
                                <div class="mt-3">
                                  <label for="" class="form-label"> Image</label>
                              <input type="file" class="form-control" name="image"  oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                              <img width="200" class="my-2 " id="pic" src="">
                              </div>
                              <div class="mt-3">
                                  <button type="submit" class="btn btn-primary">Add content</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div> 
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_parts/footer.php'; ?>
