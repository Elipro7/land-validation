<?php 
//getting the database connection... 
require_once('config.php');
$errors = array();
foreach ($errors as $error) {
	// echo $errors;
}
//working with login form submision...
$email = $password = "";
if (isset($_POST['login_btn'])) {
trim(extract($_POST));
if (count($errors) == 0) {
	$email = $_POST['email']; 
	$password = sha1($password);
	$result = $con->query("SELECT * FROM users WHERE email = '$email' AND password='$password'");
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		//`user_id`, `sname`, `role`, `email`, `password`, `dept`, `title`, `date`, `status`
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['sname'] = $row['sname'];
		$_SESSION['role'] = $row['role'];
		$_SESSION['dept'] = $row['dept'];
		$_SESSION['title'] = $row['title'];
		$_SESSION['date'] = $row['date'];
		$_SESSION['status'] = $row['status'];
		//=========================================================
		$con->query("UPDATE users SET status = 1 WHERE email = '$email' AND password = '$password'");
		if ($result->num_rows > 0) {
			echo "<script>
				alert('Login is Successful');
				window.location = '".SITE_URL."';
				</script>";
			}else{
				echo "<script>
				alert('Login failed, please check your login details again');
				window.location = '".SITE_URL."/login';
				</script>";
			}

	}else{
		echo "<script>
			alert('Wrong username or password');
			window.location = '".SITE_URL."/login';
			</script>";
	}
}
}elseif(isset($_POST['register_btn'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table...
	    //`user_id`, `sname`, `email`, `password`, `dept`, `title`, `date`, `status`
	    $check = $dbh->query("SELECT email FROM users WHERE email='$email' ")->fetchColumn();
	  if(!$check){
	  	// $reset_password = $password; 
		$password = sha1($password);
	    $sql = "INSERT INTO users VALUES(NULL,'$sname','$role','$email','$password','$dept','$title','$today',0)";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Registration is Successful');
	        	window.location = '".SITE_URL."/login';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('User registration failed');
		   	  window.location = '".SITE_URL."/register';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Username already registered');
	        window.location = '".SITE_URL."/register';
	        </script>";
	 	}
	}

	// `user_id`, `sname`, `role`, `email`, `password`, `dept`, `title`, `date`, `status`
}elseif (isset($_POST['user_btn'])) {
	trim(extract($_POST));
	// $check_user = $dbh->query("SELECT role FROM users WHERE role='$role' ")->fetchColumn();
	if(!$check_user){
	    $sql = "INSERT INTO users VALUES(NULL,'$sname','$role','$email','$password','$dept','$title','$date',0)";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('User registered Successfully');
				  window.location = '".SITE_URL."/users';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('User registration failed');
		   	  window.location = '".SITE_URL."/users';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('This User already registered');
	        window.location = '".SITE_URL."/users';
	        </script>";
	}


	// handling block-title
	// `plot_id`, `plot_no`, `plot_owner`, `plot_location`, `plot_image`, `land_status`
}elseif (isset($_POST['title_btn'])) {
	trim(extract($_POST));
	// $check_user = $dbh->query("SELECT role FROM users WHERE role='$role' ")->fetchColumn();
	if(!$check_block){
	    $sql = "INSERT INTO plots VALUES(NULL,'$plot_no','$plot_owner','$plot_location','$plot_image','$land_status')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Block Title registered Successfully');
				  window.location = '".SITE_URL."/block-title';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Block Title registration failed');
		   	  window.location = '".SITE_URL."/block-title';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('This Block Title already registered');
	        window.location = '".SITE_URL."/block-title';
	        </script>";
	}

	// handling sales
	//`sales_id`, `plot_no`, `buyer`, `price`, `amount_paid`, `date`, `witness`
}elseif (isset($_POST['sales_btn'])) {
	trim(extract($_POST));
	// $check_user = $dbh->query("SELECT role FROM users WHERE role='$role' ")->fetchColumn();
	if(!$check_sale){
	    $sql = "INSERT INTO sales VALUES(NULL,'$plot_no','$buyer','$price','$amount_paid','$date','$witness')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('sales registered Successfully');
				  window.location = '".SITE_URL."/sales';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('sales registration failed');
		   	  window.location = '".SITE_URL."/sales';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('This sale already registered');
	        window.location = '".SITE_URL."/sales';
	        </script>";
	}

	// handling Investors
	// `inves_id`, `inves_name`, `invest_image`, `invest_email`, `plot_no`, `invest_nationality`, `inventment_type`, `id`
}elseif (isset($_POST['investors_btn'])) {
	trim(extract($_POST));
	    $sql = "INSERT INTO investor VALUES(NULL,'$inves_name','$invest_image','$invest_email','$plot_no','$invest_nationality','$inventment_type','$id')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Investor registered Successfully');
	        	window.location = '".SITE_URL."/investors';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Manufucturer registration failed');
		   	  window.location = '".SITE_URL."/investors';
		      </script>";
	}
}

// handling land issues
//`land_issue_id`, `plot_no`, `reason`, `response`
elseif (isset($_POST['land_issues_btn'])) {
	trim(extract($_POST));
	    $sql = "INSERT INTO land_issues VALUES(NULL,'$plot_no','$reason','$response')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Land Issues added Successfully');
	        	window.location = '".SITE_URL."/land_issues';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Land Issues added failed');
		   	  window.location = '".SITE_URL."/land_issues';
		      </script>";
	}




// Updating/Editing  everything on the Dashboard starts here ...........................................................
// ..................................................................

// Updating Users...........................................................

//`user_id`, `sname`, `role`, `email`, `password`, `dept`, `title`, `date`, `status`

}elseif (isset($_POST['update_user_btn'])) {
    trim(extract($_POST));
    $sql = $dbh->query("UPDATE users SET sname = '$sname,', role='$role',dept='$dept',title = '$title', date='$date' WHERE user_id = '$user_id' ");
    if ($sql) {
        echo "<script>
            alert('User updated Successfully');
            window.location = '".SITE_URL."/users';
            </script>";
    }

// updating land issues........
    // `land_issue_id`, `plot_no`, `reason`, `response` 
}elseif (isset($_POST['update_land_issues_btn'])) {
    trim(extract($_POST));
    $sql = $dbh->query("UPDATE land_issues SET plot_no = '$plot_no', reason='$reason',response='$response' WHERE land_issue_id = '$land_issue_id' ");
    if ($sql) {
        echo "<script>
            alert('Land Issues updated Successfully');
            window.location = '".SITE_URL."/land_issues';
            </script>";
    }
}
// updating block title
// `plot_id`, `plot_no`, `plot_owner`, `plot_location`, `plot_image`, `land_status`
elseif (isset($_POST['update_title_btn'])){
	trim(extract($_POST));
    $sql = $dbh->query("UPDATE plots SET plot_no = '$plot_no',plot_owner = '$plot_owner', plot_location = '$plot_location', plot_image = '$plot_image', land_status = '$land_status'  WHERE plot_id = '$plot_id' ");
    if ($sql) {
        echo "<script>
            alert('Block Title updated Successfully');
            window.location = '".SITE_URL."/block-title';
            </script>";
	}
}elseif (isset($_POST['update_nurses_btn'])){
	trim(extract($_POST));
    $sql = $dbh->query("UPDATE nurses SET nursename = '$nursename' WHERE nurseid = '$nurseid' ");
    if ($sql) {
        echo "<script>
            alert('Nurses updated Successfully');
            window.location = '".HOME_URL."?nurses';
            </script>";
	}
}elseif (isset($_POST['update_manuf_btn'])){
	trim(extract($_POST));
    $sql = $dbh->query("UPDATE manufacturer  SET manufname = '$manufname', country = '$country', city = '$city' WHERE manufid = '$manufid' ");
    if ($sql) {
        echo "<script>
            alert('manufacturer updated Successfully');
            window.location = '".HOME_URL."?manufucturer';
            </script>";
	}
}elseif (isset($_POST['update_drug_btn'])){
	trim(extract($_POST));
    $sql = $dbh->query("UPDATE drugs SET drugname = '$drugname' WHERE drugid = '$drugid' ");
    if ($sql) {
        echo "<script>
            alert('Drug updated Successfully');
            window.location = '".HOME_URL."?drugs';
            </script>";
	}
}elseif (isset($_POST['update_patient_btn'])){
	trim(extract($_POST));
    $sql = $dbh->query("UPDATE patients SET pname = '$pname', sex = '$sex', dob = '$dob', district = '$district' WHERE pid = '$pid' ");
    if ($sql) {
        echo "<script>
            alert('Patient updated Successfully');
            window.location = '".HOME_URL."?patients';
            </script>";
	}
}elseif (isset($_POST['update_diagnosis_btn'])){
	trim(extract($_POST));
    $sql = $dbh->query("UPDATE diagnosis  SET diagname = '$diagname' WHERE diagid = '$diagid' ");
    if ($sql) {
        echo "<script>
            alert('Diagnosis updated Successfully');
            window.location = '".HOME_URL."?diagnosis';
            </script>";
	}
}elseif (isset($_POST['update_appointments_btn'])){
	trim(extract($_POST));
    $sql = $dbh->query("UPDATE appointments  SET message = '$message', phone = '$phone', email = '$email' WHERE appt_id = '$appt_id' ");
    if ($sql) {
        echo "<script>
            alert('Appointments  updated Successfully');
            window.location = '".HOME_URL."?appointments ';
            </script>";
	}
}


// update_appointments_btn
?>