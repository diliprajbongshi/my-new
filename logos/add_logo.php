<?php 
session_start();
require "../db.php";




require '../dashboard_parts/header.php'; ?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Logos</a>
        <span class="breadcrumb-item active">Add Logo</span>
    </nav>
    
    <div class="sl-pagebody">
      <div class="container">
          <div class="row">
           <div class="col-lg-6 m-auto">
                <div class="card">
                      <div class="card-header bg-primary">
                          <h3>Add logo </h3>
                      </div>
                      <div class="card-body">
                          <form action="logo_post.php" method="POST" enctype="multipart/form-data">
                              <div class="mt-3">
                                  <label for="" class="form-label">Logo</label>
                              <input type="file" class="form-control" name="logo"  oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                              <img width="200" class="my-2 " id="pic" src="">
                              </div>
                            
                              <div class="mt-3">
                                  <button type="submit" class="btn btn-primary">Add logo</button>
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
