<?php 
session_start();
require "../db.php";
require '../dashboard_parts/header.php';

$select_contact = "SELECT * FROM contacts_info";
$select_contact_result = mysqli_query($db_connection,$select_contact);






?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>
    
    <div class="sl-pagebody">
       <div class="conatiner">
           <div class="row">
               <div class="col-lg-12 m-auto">
                   <div class="card">
                       <div class="card-header">
                           <h3>Social Icon</h3>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Sl</th>
                                       <th>Address</th>
                                       <th>Phone</th>
                                       <th>Email</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach($select_contact_result as $key=>$contact){  ?>
                                   <tr>
                                       <td><?=$key +1?></td>
                                       <td><?=$contact['address']?></td>
                                       <td><?=$contact['phone']?></a></td>
                                       <td><?=$contact['email']?></a></td>
                                     

        
                                       <td>
                                           <a href="contact_info_delete.php?id=<?=$contact['id']?>" class="btn btn-danger">Delete</a>
                                       </td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<?php require '../dashboard_parts/footer.php'; ?>

   <?php if (isset($_SESSION['limit'])) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?= $_SESSION['limit'] ?>',
            })
        </script>
    <?php }
    unset($_SESSION['limit']) ?>
   <?php if (isset($_SESSION['limit'])) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?= $_SESSION['limit'] ?>',
            })
        </script>
    <?php }
    unset($_SESSION['limit']) ?>
