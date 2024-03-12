 <div id="update_modal<?=$row['user_id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Update User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <!-- `user_id`, `sname`, `email`, `password`, `dept`, `title`, `date`, `status` -->
           <form method="POST" action="">
            <input type="hidden" value="<?=$row['user_id']; ?>" name="user_id">
           <div class="mb-3">
                        <label for="sname" class="form-label">Username</label>
                        <input type="text" id="sname" class="form-control" name="sname" value="<?=$row['sname'] ?>" require>
                    </div>

                    <div class="mb-3">
                        <label for="example-select" class="form-label">Role</label>
                        <select class="form-select" id="example-select" name="role" value="<?=$row['role'] ?>">
                            <option>Admin</option>
                            <option>Engineers</option>
                            <option>Surveyors</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="dept" class="form-label">Department</label>
                        <input type="text" id="dept" name="dept" class="form-control" value="<?=$row['dept'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" class="form-control" name="title" require value="<?=$row['title'] ?>">
                    </div>                                                

                    <div class="mb-3">
                        <label for="date" class="form-label">Date of admission</label>
                        <input type="date" id="date" class="form-control" value="<?=$row['date'] ?>" name="date" require>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_user_btn" class="btn btn-primary">Upate User</button>
                    </div>
           </form>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</div>


<!-- handling update for Landtitle -->
<!-- `land_issue_id`, `plot_no`, `reason`, `response` -->

<div id="update_modal2<?=$row['land_issue_id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
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
                        <input type="text" id="plot_no" class="form-control" name="plot_no" value="<?=$row['plot_no'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="reason" class="form-label">Reason</label>
                        <textarea class="form-control" name="reason" id="example-textarea" rows="5" ><?=$row['reason'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="response" class="form-label">Responsibles</label>
                        <textarea class="form-control" name="response" id="response" rows="2"><?=$row['response'] ?></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="update_land_issues_btn">Update Land Issues</button>
                    </div>
           </form>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>



<!-- Updating Block Titles -->

<div id="update_modal4<?=$row['plot_id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-location" id="standard-modalLabel">New Land Title</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
           <form method="POST" action="">
            <input type="hidden" name="plot_id" value="<?=$row['plot_id'] ?>">
            <!-- `plot_id`, `plot_no`, `plot_owner`, `plot_location`, `plot_image`, `land_status` -->
           <div class="mb-3">
                        <label for="pnumber" class="form-label">Plot Number</label>
                        <input type="text" id="pnumber" class="form-control" name="plot_no" value="<?=$row['plot_no'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="owner" class="form-label">Owner</label>
                        <input type="text" id="owner" name="plot_owner" class="form-control" value="<?=$row['plot_owner'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" id="location" class="form-control" name="plot_location" value="<?=$row['plot_location'] ?>" required>
                    </div>                                                

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" id="doa" class="form-control" name="plot_image" value="<?=$row['plot_image'] ?>" required>
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
                        <button type="submit" name="update_title_btn" class="btn btn-primary">Update Block Title</button>
                    </div>
           </form>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!-- handling sales update -->
<div id="update_modal5<?=$row['sales_id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-price" id="standard-modalLabel">New sales</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
           <form method="POST" action="">
            <input type="hidden" name="sales_id" value="<?=$row['sales_id'] ?>">
            <!-- `sales_id`, `plot_no`, `buyer`, `price`, `amount_paid`, `date`, `witness` -->
           <div class="mb-3">
                        <label for="pnumber" class="form-label">Plot Number</label>
                        <input type="text" id="pnumber" class="form-control" name="plot_no" value="<?=$row['plot_no'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="buyer" class="form-label">Buyer</label>
                        <input type="text" id="buyer" name="buyer" class="form-control" value="<?=$row['buyer'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" id="price" class="form-control" name="price" value="<?=$row['price'] ?>">
                    </div>                                                

                    <div class="mb-3">
                        <label for="amountpaid" class="form-label">Amount Paid</label>
                        <input type="text" id="doa" class="form-control" name="amount_paid" value="<?=$row['amount_paid'] ?>">
                    </div>

                     <div class="mb-3">
                        <label for="date" class="form-label">Date of Transaction</label>
                        <input type="date" id="dot" class="form-control" name="date" value="<?=$row['date'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="witness" class="form-label">Witness</label>
                        <input type="text" id="witness" class="form-control" name="witness" value="<?=$row['witness'] ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_sales_btn" class="btn btn-primary">Update Sales</button>
                    </div>
           </form>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!-- Handling Update for Investors -->
<div id="update_modal4<?=$row['inves_id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
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
                        <input type="text" id="inves_name" class="form-control" name="inves_name" value="<?=$row['inves_name'] ?>">
                    </div>

                     <div class="mb-3">
                         <label for="invest_image" class="form-label">Image</label>
                         <input class="form-control" id="invest_image" type="file" name="invest_image" value="<?=$row['invest_image'] ?>">
                     </div>

                    <div class="mb-3">
                        <label for="invest_email" class="form-label">Email</label>
                        <input type="email" id="invest_email" name="invest_email" class="form-control" value="<?=$row['invest_email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="plot_no" class="form-label">Plot Number</label>
                        <input type="text" id="plot_no" name="plot_no" class="form-control" value="<?=$row['plot_no'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="invest_nationality" class="form-label">Nationality</label>
                        <input type="text" id="invest_nationality" class="form-control" name="invest_nationality" value="<?=$row['invest_nationality'] ?>">
                    </div>                                                

                    <div class="mb-3">
                        <label for="inventment_type" class="form-label">Investment Type</label>
                        <input type="text" class="form-control" id="inventment_type" name="inventment_type" value="<?=$row['inventment_type'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="info" class="form-label">Identification</label>
                        <input type="text" class="form-control"value="<?=$row['id'] ?>" name="id">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_investors_btn" class="btn btn-primary">Update Investor</button>
                    </div>
           </form>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>