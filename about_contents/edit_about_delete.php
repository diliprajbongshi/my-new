<?php 
session_start();
require "../db.php";

$select_about = "SELECT * FROM about_contents";
$select_about_result =mysqli_query($db_connection,$select_about);
$after_assoc = mysqli_fetch_assoc($select_about_result);


require '../dashboard_parts/header.php'; ?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Banner</a>
        <span class="breadcrumb-item active">Add Banner Content</span>
    </nav>
    
    <div class="sl-pagebody">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto" >
                  <div class="card">
                      <div class="card-header bg-warning">
                          <h3>Edit About content</h3>
                      </div>
                      <div class="card-body">
                          <form action="about_content_post.php" method="POST" enctype="multipart/form-data">
                              <div class="mt-3">
                                  <label for="" class="form-label">Sub Title</label>
                              <input type="hidden" value="<?=$after_assoc['id']?>"  class="form-control" name="id">
                              <input type="text" value="<?=$after_assoc['sub_title']?>"  class="form-control" name="sub_title">
                              </div>
                              <div class="mt-3">
                                  <label for="" class="form-label">Title</label>
                              <input type="text" value="<?=$after_assoc['title']?>"  class="form-control" name="title">
                              </div>
                              <div class="mt-3">
                                  <label for="" class="form-label">Description</label>
                              <input type="text" value="<?=$after_assoc['desp']?>"  class="form-control" name="desp">
                              </div>
                                <div class="mt-3">
                                  <label for="" class="form-label">Banner Image</label>
                              <input type="file" class="form-control" name="image"  oninput="pic.src=window.URL.createObjectURL(this.files[0])" >
                              <img width="200" class="my-2 " id="pic" src="../uploads/about/<?=$after_assoc['image']?>">
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
