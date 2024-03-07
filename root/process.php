<?php 
//getting the database connection... 
require_once('config.php');
$errors = array();
foreach ($errors as $error) {
	 echo $errors;
}
//working with login form submision

if (isset($_POST['loginbtn'])) {
	trim(extract($_POST));
	if (count($errors) == 0) {
		$phone = $_POST['phone']; 
		$password = sha1($password);
		$result = $dbh->query("SELECT * FROM users WHERE phone = '$phone' AND password='$password'");
		if ($result->rowCount() == 1) {
			$row = $result->fetch(PDO::FETCH_OBJ);
			//`userid`, `username`, `phone`, `password`, `u_status`, `role`, `date_registered``
			$_SESSION['userid'] = $row->userid;
			$_SESSION['username'] = $row->username;
			$_SESSION['u_status'] = $row->u_status;
			$_SESSION['role'] = $row->role;
			$_SESSION['date_registered'] = $row->date_registered;
			//=========================================================
			if ($result->rowCount() > 0) {
				echo "<script>
				alert('Login is Successful');
				window.location = '".SITE_URL."';
				</script>";
			}else{
				echo "<script>
				alert('Login failed, please check your login details again');
				window.location = '".SITE_URL."';
				</script>";
			}

		}else{
			echo "<script>
				alert('Wrong number or password');
				window.location = '".SITE_URL."';
				</script>";
		}
	}
}elseif(isset($_POST['register'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table...
	    //`userid`, `username`, `phone`, `password`, `u_status`, `role`, `date_registered`
	    $check = $dbh->query("SELECT phone FROM users WHERE phone='$phone' ")->fetchColumn();
	  if(!$check){
	  	// $reset_password = $password; 
		$password = sha1($password);
	    $sql = "INSERT INTO users VALUES(NULL,'$username','$phone','$password',0,'$role','$today')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Registration is Successful');
	        	window.location = '".SITE_URL."/login.php';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('User registration failed');
		   	  window.location = '".SITE_URL."/register.php';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Username already registered');
	        window.location = '".SITE_URL."/register.php';
	        </script>";
	 	}
	}


}elseif(isset($_POST['counselor_btn'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table from counselor form...
	    //`userid`, `username`, `phone`, `password`, `u_status`, `role`, `date_registered`
	    $check = $dbh->query("SELECT phone FROM users WHERE phone='$phone' ")->fetchColumn();
	  if(!$check){
		$password = sha1($password);
	    $sql = "INSERT INTO users VALUES(NULL,'$username','$phone','$password',0,'$role','$today')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Counselor is Successful');
	        	window.location = '".SITE_URL."/counselor.php';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Counselor registration failed');
		   	  window.location = '".SITE_URL."/counselor.php';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Counselor already registered');
	        window.location = '".SITE_URL."/counselor.php';
	        </script>";
	 	}
	}
}elseif(isset($_POST['career_btn'])){
	trim(extract($_POST));
	if (count($errors) == 0) {
	    //insert record to mysql table from career form...
	    //`career_id`, `cname`, `croles`, `cdescription`, `eligibility`
	    $check = $dbh->query("SELECT * FROM career WHERE cname='$name' ")->fetchColumn();
	  if(!$check){
		// $password = sha1($password);
	    $sql = "INSERT INTO career VALUES(NULL,'$cname','$croles','$cdescription','$eligibility')";
	    $result = dbCreate($sql);
	    if($result == 1){
	    	echo "<script>
	          	alert('Career is Successful');
	        	window.location = '".SITE_URL."/career.php';
	          	</script>";
	    }else{
	        echo "<script>
		      alert('Career registration failed');
		   	  window.location = '".SITE_URL."/career.php';
		      </script>";
	    }
	 }else{
	      echo "<script>
	        alert('Career already registered');
	        window.location = '".SITE_URL."/career.php';
	        </script>";
	 	}
	}

}

?>