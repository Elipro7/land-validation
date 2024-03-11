<?php 
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
                    <h4 class="page-location">Land Issues</h4>
                </div>
            </div>
        </div>
        <!-- end page location -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-5">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Add Land Issues</button>
                            </div>
                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-location" id="standard-modalLabel">New Land Issue</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- `land_issue_id`, `plot_no`, `reason`, `response` -->
                                           <form method="POST">
                                            <input type="hidden" name="land_issue_id" value="<?=$row['land_issue_id'] ?>">
                                           <div class="mb-3">
                                                        <label for="plot_no" class="form-label">Plot Number</label>
                                                        <input type="text" id="plot_no" class="form-control" name="plot_no">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="reason" class="form-label">Reason</label>
                                                        <textarea class="form-control" name="reason" id="example-textarea" rows="5"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="response" class="form-label">Responsibles</label>
                                                        <textarea class="form-control" name="response" id="response" rows="2"></textarea>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="land_issues_btn">Save changes</button>
                                                    </div>
                                           </form>
                                        </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table dt-responsive nowrap w-100" id="basic-datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Plot No</th>
                                        <th>Reason</th>
                                        <th>Responsibles</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                </thead>

                                 <tbody>
                                        <!-- `land_issue_id`, `plot_no`, `reason`, `response` -->
                                <?php
                                $result = $dbh->query("SELECT * FROM land_issues");
                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td><?=$row['land_issue_id'] ?></td>
                                    <td><?=$row['plot_no'] ?></td>
                                    <td><?=$row['reason'] ?></td>
                                    <td><?=$row['response'] ?></td>
    
                                    <td>
                                        <a href="#update_modal2<?=$row['land_issue_id']?>" data-bs-toggle="modal" class="btn btn-primary">Update</a>
                                        <a onclick="return confirm('Do you want to delete this Land Issues?');" href="?del-land_issue=<?=$row['land_issue_id']?>" class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-success viewLandissues" data-toggle="modal" data-target="#careerModal" data-career-id="<?=$row['land_issue_id']?>">View Land Issues</button>
                                    </td>
                                </tr>
                                <?php
                                include 'update.php';
                                 } ?>
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