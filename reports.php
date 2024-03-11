<?php 
include "root/process.php";
include "header.php";
?>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page location -->
            <div class="row">
                <div class="col-12">
                    <div class="page-location-box">
                        <h4 class="page-location">Land Titles</h4>
                    </div>
                </div>
            </div>
            <!-- end page location -->
            <!-- `report_id`, `title`, `file` -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
    
                            <div class="table-responsive">
                                <table class="table dt-responsive nowrap w-100" id="datatable-buttons">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Plot No</th>
                                            <th>Owner</th>
                                            <th>location</th>
                                            <th>File</th>
                                            <th style="width: 75px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                            <!-- `report_id`, `plot_no`, `owner`, `location`, `file` -->
                                    <?php
                                    $result = $dbh->query("SELECT * FROM reports");
                                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td><?=$row['report_id'] ?></td>
                                        <td><?=$row['plot_no'] ?></td>
                                        <td><?=$row['owner'] ?></td>
                                        <td><?=$row['location'] ?></td>
                                        <td><?=$row['file'] ?></td>
        
                                        <td>
                                            <a onclick="return confirm('Do you want to delete this Report?');" href="?del-career=<?=$row['report_id']?>" class="btn btn-danger">Delete</a>
                                            <button type="button" class="btn btn-success viewCareer" data-toggle="modal" data-target="#careerModal" data-career-id="<?=$row['report_id']?>">View Land Issues</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            
        </div> <!-- container -->

    </div> <!-- content -->

  <?php include "footer.php"?>