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
                        <button type="submit" name="update_title_btn" class="btn btn-primary">Save changes</button>
                    </div>
           </form>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
