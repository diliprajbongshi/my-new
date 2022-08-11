<?php
session_start();
require "../db.php";
require "../dashboard_parts/header.php";
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>
    
    <div class="sl-pagebody">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 m-auto">
                 <div class="card">
                     <div class="card-header bg-primary">
                         <h3>Add testymonial</h3>
                     </div>
                     <div class="card-body">
                         <form action="testy_post.php" method="POST" enctype="multipart/form-data">
                         
                            <div class="mt-3">
                                 
                                 <input type="file" value="<?=$after_assoc_info['profile_photo']?>" class="form-control" name="profile_photo" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                 <img width="200" class="my-2 " id="pic" src="/jett/uploads/users/<?= $after_assoc_info['profile_photo'] ?>">
                            </div>
                            <div class="mt-3">
                               <label for="" class="form-label">Description</label>
                               <textarea name="desp" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mt-3">
                               <label for="" class="form-label">Title</label>
                               <input type="text" class="form-control" name="title">
                            </div>
                            <div class="mt-3">
                               <label for="" class="form-label">Sub-Title</label>
                               <input type="text" class="form-control" name="sub_title">
                            </div>
                            <div class="mt-3">
                               <button type="submit" class="btn btn-primary">Add </button>
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




<?php
require "../dashboard_parts/footer.php";

?>

<?php if (isset($_SESSION['success'])) { ?>
    <script>
        Swal.fire(
            'Updated!',
            '<?= $_SESSION['success'] ?>',
            'success'
        )
    </script>
<?php }
unset($_SESSION['success']) ?>
<?php if (isset($_SESSION['size'])) { ?>
    <script>
        Swal.fire(
            'Updated!',
            '<?= $_SESSION['size'] ?>',
            'success'
        )
    </script>
<?php }
unset($_SESSION['size']) ?>
<?php if (isset($_SESSION['invalid'])) { ?>
    <script>
        Swal.fire(
            'Updated!',
            '<?= $_SESSION['invalid'] ?>',
            'success'
        )
    </script>
<?php }
unset($_SESSION['invalid']) ?>