<?php

include "connectdb.php";

$result="";

  if(isset($_POST['add_btn']))
  {
  	    $name=$_POST['student_name'];
        $age=$_POST['student_age'];
        $gender=$_POST['student_gender'];
  		$email=$_POST['student_email'];
  		$pass=md5($_POST['student_pass']);
  		$conf_pass=md5($_POST['student_conf_pass']);

  		if($pass == $conf_pass)
        {
            $insertSQL="INSERT INTO student_info(name, age, gender, email, pass) VALUES ('$name', $age, $gender, '$email', '$pass')";
            
            if($conn->query($insertSQL))
  		    {
  			 
                $result="Student Data Added Successfully.";
  		    }
            else
            {
                die($conn->error);
            }
        }
      else
      {
         $result="Password Not Matched!!Try Again!!";
      }
  }

?>

<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User Login and Registration</title>
    <link rel="stylesheet" type="text.css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css";
</head>

<body>
    
    <div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6">
        <h2> Login here </h2>
        <form action="validation.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control"  required>
                </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control"  required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-md-6">
        <h2> Register Here</h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control"  required>
                </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control"  required>
                </div>
                <button type="submit" class="btn btn-primary"> Register </button>
            </form>
        </div>
        </div>
    </div>
        </div>

</body>
</html>