<?php 
session_start();
require "../db.php";
require '../dashboard_parts/header.php';

$select_about_content = "SELECT * FROM about_contents";
$select_about_content_result = mysqli_query($db_connection,$select_about_content);





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
                           <h3>About view content</h3>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Sl</th>
                                       <th>Sub Title</th>
                                       <th>Title</th>
                                       <th>Description</th>
                                       <th>image</th>
                                    
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach($select_about_content_result as $key=>$about_content){  ?>
                                   <tr>
                                       <td><?=$key +1?></td>
                                       <td><?=$about_content['sub_title']?></td>
                                       <td><?=$about_content['title']?></td>
                                       <td><?=$about_content['desp']?></td>
                                       <td><img width="100" src="../uploads/about/<?=$about_content['image']?>" alt=""></td>

                                       
                                       <td>
                                           <a href="edit_about_delete.php?id=<?=$about_content['id']?>" class="btn btn-primary">Edit</a>
                                           
                                       </td>
                                       <td>
                                           <a href="about_content_delete.php?id=<?=$about_content['id']?>" class="btn btn-danger">Delete</a>
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