<?php 
session_start();
require "../db.php";
require '../dashboard_parts/header.php';

$select_counter = "SELECT * FROM counter";
$select_counter_result = mysqli_query($db_connection,$select_counter);




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
                           <h3>Counter Icon</h3>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Sl</th>
                                       <th>Icon</th>
                                       <th>title</th>
                                       <th>Number</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach($select_counter_result as $key=>$counter){  ?>
                                   <tr>
                                       <td><?=$key +1?></td>
                                       <td><i class="fa <?=$counter['icon_class']?>"></i></td>
                                   <td><?=$counter['title']?></td>
                                   <td><?=$counter['number']?></td>
                                     

                                       <td>
                                           <?php if($counter['status']==1){ ?>
                                            <a href="counter_status.php?id=<?=$counter['id']?>" class="btn btn-success">Active</a>
                                            <?php }else{?>
                                                <a href="counter_status.php?id=<?=$counter['id']?>" class="btn btn-secondary">Deactive</a>

                                             <?php }?>
                                        </td>
                                       <td>
                                           <a href="counter_delete.php?id=<?=$counter['id']?>" class="btn btn-danger">Delete</a>
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
