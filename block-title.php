<?php include "header.php"?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page plot_location -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-plot_location-box">
                                    <h4 class="page-plot_location">Land Titles</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page plot_location -->

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
                                                                <h4 class="modal-plot_location" id="standard-modalLabel">New Land Title</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                           <form method="POST" action="">
                                                            <!-- `plot_id`, `plot_no`, `plot_plot_owner`, `plot_plot_location`, `plot_plot_image`, `status` -->
                                                           <div class="mb-3">
                                                                        <label for="plot_no" class="form-label">Plot Number</label>
                                                                        <input type="text" id="plot_no" class="form-control" name="plot_no">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="plot_owner" class="form-label">Owner</label>
                                                                        <input type="text" id="plot_owner" name="plot_owner" class="form-control">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="plot_location" class="form-label">Location</label>
                                                                        <input type="text" id="plot_location" class="form-control" name="plot_location">
                                                                    </div>                                                

                                                                    <div class="mb-3">
                                                                        <label for="plot_image" class="form-label">Image</label>
                                                                        <input type="file" id="doa" class="form-control" name="plot_image">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="example-select" class="form-label">Status</label>
                                                                        <select class="form-select" id="example-select" name="status">
                                                                            <option>Vacant</option>
                                                                            <option>Taken</option>
                                                                            <option>Disputes</option>
                                                                            <option>Rented</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" name="block-title_btn" class="btn btn-primary">Save changes</button>
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
                                                        <th>plot_owner</th>
                                                        <th>plot_location</th>
                                                        <th>plot_image</th>
                                                        <th>Status</th>
                                                        <th style="width: 75px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
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