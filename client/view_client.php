<?php 
session_start();
require "../db.php";
require '../dashboard_parts/header.php';


$select_client= "SELECT * FROM clients";
$select_client_result = mysqli_query($db_connection,$select_client);




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
                           <h3>View Logo</h3>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Sl</th>
                                       <th>Logo</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach($select_client_result as $key=>$client){  ?>
                                   <tr>
                                       <td><?=$key +1?></td>
                                       <td>
                                           <img width="100"  src="../uploads/client/<?=$client['logo']?>" alt="">
                                       </td>
                                   

                                       <td>
                                           <?php if($client['status']==1){ ?>
                                            <a href="client_status.php?id=<?=$client['id']?>" class="btn btn-success">Active</a>
                                            <?php }else{?>
                                                <a href="client_status.php?id=<?=$client['id']?>" class="btn btn-secondary">Deactive</a>

                                             <?php }?>
                                        </td>
                                       <td>
                                           <a href="client_delete.php?id=<?=$client['id']?>" class="btn btn-danger">Delete</a>
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