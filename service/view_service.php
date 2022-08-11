<?php 
session_start();
require "../db.php";
require '../dashboard_parts/header.php';

$select_service = "SELECT * FROM services";
$select_service_result = mysqli_query($db_connection,$select_service);






?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Services</a>
        <span class="breadcrumb-item active">Service View</span>
    </nav>
    
    <div class="sl-pagebody">
       <div class="conatiner">
           <div class="row">
               <div class="col-lg-12 m-auto">
                   <div class="card">
                       <div class="card-header">
                           <h3>Service</h3>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Sl</th>
                                       <th>Icon</th>
                                       
                                       <th>Title</th>
                                       <th>Description</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach($select_service_result as $key=>$service){  ?>
                                   <tr>
                                       <td><?=$key +1?></td>
                                 <td><i class="fa <?=$service['icon_class']?>"></i></td>
                                       <td> <?=$service['title']?></td>
                                       <td> <?=$service['desp']?></td>
                                      
                                     

                                       <td>
                                           <?php if($service['status']==1){ ?>
                                            <a href="service_status.php?id=<?=$service['id']?>" class="btn btn-success">Active</a>
                                            <?php }else{?>
                                                <a href="service_status.php?id=<?=$service['id']?>" class="btn btn-secondary">Deactive</a>

                                             <?php }?>
                                        </td>
                                       <td>
                                           <a href="service_delete.php?id=<?=$service['id']?>" class="btn btn-danger">Delete</a>
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
