<?php 
include "header.php";
?>

<div class="content-page">
<div class="content">

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page from -->
    <div class="row">
        <div class="col-12">
            <div class="page-from-box">
                <h4 class="page-from">Investers</h4>
            </div>
        </div>
    </div>
    <!-- end page from -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Add Invester</button>
                        </div>
                        <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-from" id="standard-modalLabel">New Investors</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- `inves_id`, `inves_name`, `invest_image`, `invest_email`, `plot_no`, `invest_nationality`, `inventment_type`, `id` -->
                                       <form method="POST">
                                        <input type="hidden" name="inves_id" value="<?=$row['inves_id'] ?>">
                                       <div class="mb-3">
                                                    <label for="inves_name" class="form-label">Investor Name</label>
                                                    <input type="text" id="inves_name" class="form-control" name="inves_name">
                                                </div>

                                                 <div class="mb-3">
                                                     <label for="invest_image" class="form-label">Image</label>
                                                     <input class="form-control" id="invest_image" type="file" name="invest_image">
                                                 </div>

                                                <div class="mb-3">
                                                    <label for="invest_email" class="form-label">Email</label>
                                                    <input type="email" id="invest_email" name="invest_email" class="form-control" placeholder="xx@gmail.com">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="plot_no" class="form-label">Plot Number</label>
                                                    <input type="text" id="plot_no" name="plot_no" class="form-control">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="invest_nationality" class="form-label">Nationality</label>
                                                    <input type="text" id="invest_nationality" class="form-control" name="invest_nationality" placeholder="Kampala/Uganda">
                                                </div>                                                

                                                <div class="mb-3">
                                                    <label for="inventment_type" class="form-label">Investment Type</label>
                                                    <input type="text" class="form-control" id="inventment_type" name="inventment_type">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="info" class="form-label">Identification</label>
                                                    <input type="text" class="form-control" placeholder="Nin_No/Passport" name="id">
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="investors_btn" class="btn btn-primary">Save changes</button>
                                                </div>
                                       </form>
                                    </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                    </div>
<!-- `inves_id`, `inves_name`, `invest_image`, `invest_email`, `plot_no`, `invest_nationality`, `inventment_type`, `id` -->
                    <div class="table-responsive">
                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Plot Number</th>
                                    <th>Nationality</th>
                                    <th>Investment Type</th>
                                    <th>Identification</th>
                                    <th style="width: 75px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = $dbh->query("SELECT * FROM investor");
                            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td><?=$row['inves_id'] ?></td>
                                <td><?=$row['inves_name'] ?></td>
                                <td><?=$row['invest_image'] ?></td>
                                <td><?=$row['invest_email'] ?></td>
                                <td><?=$row['plot_no'] ?></td>
                                <td><?=$row['invest_nationality'] ?></td>
                                <td><?=$row['inventment_type'] ?></td>
                                <td><?=$row['id'] ?></td>
                                <td>
                                    <a href="#update_modal4<?=$row['inves_id']?>" data-bs-toggle="modal" class="btn btn-primary">Update</a>
                                    <a onclick="return confirm('Do you want to delete this Investor?');" href="?del-investor=<?=$row['inves_id']?>" class="btn btn-danger">Delete</a>
                                    <button type="button" class="btn btn-success viewInvestor" data-toggle="modal" data-target="#careerModal" data-career-id="<?=$row['inves_id']?>">View Career</button>
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