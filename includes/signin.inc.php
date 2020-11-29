<?php

session_start();

	if(isset($_POST['submit'])){
		include 'dbh.inc.php' ;
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

			$sql = "SELECT * FROM receiver WHERE email='$email' OR pasword='$pwd' ";
			$result= mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck < 1){
				header("Location: ../signin.php?signin=error1");
				exit();
			}
			else{
				if($row = mysqli_fetch_assoc($result)){
					$hashedpwd = md5($pwd);
					if ($hashedpwd == $row['pasword']) {
						//log in the user here
						$_SESSION['name']= $row['fullname'];
						$_SESSION['rec_email']= $row['email'];
						$_SESSION['rec_blood'] = $row['blood'];
						header("Location: ../home.php?signin=success");
						exit();

					}
					else{
						header("Location: ../signin.php?signin=IncorrectPassword");
						exit();
					}
				}
			}
		}
else{
	header("Location: ../signin.php?signin=error");
	exit();
}
?>
