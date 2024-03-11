<?php 
include "header.php";

?>

<div class="content-page">
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Users</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-5">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Add User</button>
                            </div>
                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">New User</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <!-- `user_id`, `sname`, `email`, `password`, `dept`, `title`, `date`, `status` -->
                                           <form method="POST" action="">
                                            <input type="hidden" name="user_id" value="<?=$row['user_id'] ?>">
                                           <div class="mb-3">
                                                        <label for="sname" class="form-label">Username</label>
                                                        <input type="text" id="sname" class="form-control" name="sname" require>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-select" class="form-label">Role</label>
                                                        <select class="form-select" id="example-select" name="role">
                                                            <option>Admin</option>
                                                            <option>Engineers</option>
                                                            <option>Surveyors</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" id="email" name="email" class="form-control" placeholder="xx@gmail.com" require>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" id="password" name="password" class="form-control" placeholder="*******" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="dept" class="form-label">Department</label>
                                                        <input type="dept" id="dept" name="dept" class="form-control" placeholder="Departments" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" id="title" class="form-control" name="title" require>
                                                    </div>                                                

                                                    <div class="mb-3">
                                                        <label for="date" class="form-label">Date of admission</label>
                                                        <input type="date" id="date" class="form-control" placeholder="placeholder" name="date" require>
                                                    </div>

                                                    <!-- <div class="mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <input type="text" id="status" class="form-control" placeholder="active/fired" name="status">
                                                    </div> -->

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="user_btn" class="btn btn-primary">Save changes</button>
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
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Title</th>
                                        <th>Date</th>
                       
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                    <!-- `user_id`, `sname`, `role`, `email`, `password`, `dept`, `title`, `date`, `status` -->
                                </thead>
                                <tbody>
                                <?php
                                $result = $dbh->query("SELECT * FROM users");
                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td><?=$row['user_id'] ?></td>
                                    <td><?=$row['sname'] ?></td>
                                    <td><?=$row['role'] ?></td>
                                    <td><?=$row['email'] ?></td>
                                    <td><?=$row['dept'] ?></td>
                                    <td><?=$row['title'] ?></td>
                                    <td><?=$row['date'] ?></td>
                                    <td>
                                     
                                       <a href="#update_modal<?=$row['user_id']?>" data-bs-toggle="modal" class="btn btn-primary">Update</a>

                                        <a onclick="return confirm('Do you want to delete this User?');" href="?del-user=<?=$row['user_id']?>" class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-success viewCareer" data-toggle="modal" data-target="#careerModal" data-career-id="<?=$row['user_id']?>">View Career</button>
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