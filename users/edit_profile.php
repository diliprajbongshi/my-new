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
                         <h3>Edit Profile</h3>
                     </div>
                     <div class="card-body">
                         <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                            <div class="mt-3">
                                 <label for="" class="form-label">Name</label>
                                 <input type="hidden" value="<?=$after_assoc_info['id']?>" class="form-control" name="id">
                                 <input type="text" value="<?=$after_assoc_info['name']?>" class="form-control" name="name">
                            </div>
                            <div class="mt-3">
                                 <label for="" class="form-label">Email</label>
                                 <input type="email" value="<?=$after_assoc_info['email']?>" class="form-control" name="email">
                            </div>
                            <div class="mt-3">
                                 <label for="" class="form-label">Password</label>
                                 <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mt-3">
                                 
                                 <input type="file" value="<?=$after_assoc_info['profile_photo']?>" class="form-control" name="profile_photo" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                 <img width="200" class="my-2 " id="pic" src="/jett/uploads/users/<?= $after_assoc_info['profile_photo'] ?>">
                            </div>
                            <div class="mt-3">
                               <button type="submit" class="btn btn-primary">Update</button>
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

<?php if (isset($_SESSION['edit_pro'])) { ?>
    <script>
        Swal.fire(
            'Updated!',
            '<?= $_SESSION['edit_pro'] ?>',
            'success'
        )
    </script>
<?php }
unset($_SESSION['edit_pro']) ?>