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
                        <h4 class="page-location">Land Titles</h4>
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Add Land Title</button>
                                </div>
                                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-location" id="standard-modalLabel">New Land Title</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                               <form method="POST" action="">
                                                <!-- `plot_id`, `plot_no`, `plot_owner`, `plot_location`, `plot_image`, `land_status` -->
                                               <div class="mb-3">
                                                            <label for="pnumber" class="form-label">Plot Number</label>
                                                            <input type="text" id="pnumber" class="form-control" name="plot_no" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="owner" class="form-label">Owner</label>
                                                            <input type="text" id="owner" name="plot_owner" class="form-control" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="location" class="form-label">Location</label>
                                                            <input type="text" id="location" class="form-control" name="plot_location" required>
                                                        </div>                                                

                                                        <div class="mb-3">
                                                            <label for="image" class="form-label">Image</label>
                                                            <input type="file" id="doa" class="form-control" name="plot_image" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="example-select" class="form-label">Land Status</label>
                                                            <select class="form-select" id="example-select" name="land_status" required>
                                                                <option value="Vacant">Vacant</option>
                                                                <option value="Taken">Taken</option>
                                                                <option value="Disputes">Disputes</option>
                                                                <option value="Rented">Rented</option>

                                                            </select>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="title_btn" class="btn btn-primary">Save changes</button>
                                                        </div>
                                               </form>
                                            </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
                            </div>
    
                            <div class="table-responsive">
                                <table class="table table-centered table-striped dt-responsive nowrap w-100" id="basic-datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Plot Number</th>
                                            <th>Owner</th>
                                            <th>Location</th>
                                            <th>Image</th>
                                            <th>Land Status</th>
                           
                                            <th style="width: 75px;">Action</th>
                                        </tr>
                                        <!-- `plot_id`, `plot_no`, `plot_owner`, `plot_location`, `plot_image`, `land_status` -->
                                    </thead>
                                    <tbody>
                                    <?php
                                    $result = $dbh->query("SELECT * FROM plots");
                                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td><?=$row['plot_id'] ?></td>
                                        <td><?=$row['plot_no'] ?></td>
                                        <td><?=$row['plot_owner'] ?></td>
                                        <td><?=$row['plot_location'] ?></td>
                                        <td><?=$row['plot_image'] ?></td>
                                        <td><?=$row['land_status'] ?></td>
                                        <td>

                                             <a href="#update_modal4<?=$row['plot_id']?>" data-bs-toggle="modal" class="btn btn-primary">Update</a>
                                            <a onclick="return confirm('Do you want to delete this Land Title?');" href="?del-land_title=<?=$row['plot_id']?>" class="btn btn-danger">Delete</a>
                                            <button type="button" class="btn btn-success viewCareer" data-toggle="modal" data-target="#careerModal" data-career-id="<?=$row['plot_id']?>">View Career</button>
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