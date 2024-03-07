<?php include "header.php"?>

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page price -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-price-box">
                                    <h4 class="page-price">Sales</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page price -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-5">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Add sales</button>
                                            </div>
                                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-price" id="standard-modalLabel">New sales</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                           <form >
                                                           <div class="mb-3">
                                                                        <label for="pnumber" class="form-label">Plot Number</label>
                                                                        <input type="text" id="pnumber" class="form-control" name="pnumber">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="buyer" class="form-label">Buyer</label>
                                                                        <input type="text" id="buyer" name="buyer" class="form-control">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="price" class="form-label">Price</label>
                                                                        <input type="text" id="price" class="form-control" name="price">
                                                                    </div>                                                

                                                                    <div class="mb-3">
                                                                        <label for="amountpaid" class="form-label">Amount Paid</label>
                                                                        <input type="text" id="doa" class="form-control" name="amountpaid">
                                                                    </div>

                                                                     <div class="mb-3">
                                                                        <label for="date" class="form-label">Date of Transaction</label>
                                                                        <input type="date" id="dot" class="form-control" name="dot">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="witness" class="form-label">Witness</label>
                                                                        <input type="text" id="witness" class="form-control" name="witness">
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
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
                                                        <th>buyer</th>
                                                        <th>price</th>
                                                        <th>Amount Paid</th>
                                                        <th>Date of Transaction</th>
                                                        <th>Witness</th>
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