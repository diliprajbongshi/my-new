<?php
session_start();
require "../db.php";
require "../dashboard_parts/header.php";

$select_tes = "SELECT * FROM testy ";
$select_tes_result = mysqli_query($db_connection,$select_tes);

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
             <div class="col-lg-12 m-auto">
                 <div class="card">
                     <div class="card-header bg-primary">
                         <h3>Add testymonial</h3>
                     </div>
                     <div class="card-body">
                        <table class="table table-bordered">
                              <tr>
                                  <th>Sl</th>
                                  <th>Description</th>
                                  <th>Title</th>
                                  <th>Sub-Title</th>
                                  <th>Image</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                              <?php foreach($select_tes_result as $key=>$tes){ ?>
                              <tr>
                                  <td><?= $key +1?></td>
                                  <td><?= $tes['desp']?></td>
                                  <td><?= $tes['title']?></td>
                                  <td><?= $tes['sub_title']?></td>
                                  <td>
                                       <img width="100"  src="../uploads/testy/<?=$tes['profile_photo']?>" alt="">
                                  </td>
                                  <td>
                                      <?php if($tes['status']==1){ ?>
                                     
                                      <a href="testy_status.php?id=<?= $tes['id']?>" class="btn btn-primary">Active</a>
                                      <?php }else{ ?>
                                        <a href="testy_status.php?id=<?= $tes['id']?>" class="btn btn-secondary">Deactive</a>
                                        <?php }?>
                                  </td>
                                  <td>
                                      <a href="testy_delete.php?id=<?=$tes['id']?>" class="btn btn-danger">Delete</a>
                                  </td>
                              </tr>
                              <?php } ?>
                        </table>
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