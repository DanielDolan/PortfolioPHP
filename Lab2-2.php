<!DOCTYPE html>
<html>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/lab2b.css">
	<head>
		<title>Sign In</title>
	</head>
	<body>
    <div class="container-fluid bg-primary"> 
      <nav class="navbar navbar-expand-md navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="home.html"> <i class="fas fa-home"></i></i></a>             
        
          <div class="collapse navbar-collapse  align-items-center" id="navbarTogglerDemo03">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="lab1B.html">Lab 1B <span class="sr-only"></span></a>
            </li>
            <li class="nav-item ml-5 ">
              <a class="nav-link" href="lab1c.php">Lab 1C</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link" href="lab1d.php">Lab 1D</a>
              </li>
              <li class="nav-item ml-5">
                <a class="nav-link" href="Lab2-1.php">Lab 2A</a>
              </li>
              <li class="nav-item ml-5">
                <a class="nav-link" href="Lab2-2.php">Lab 2B</a>
              </li>
              <li class="nav-item ml-5">
                <a class="nav-link" href="Lab2-3.php">Lab 2C</a>
              </li>
          </ul>
          </div>
        </nav>
      </div>
<?php
	$errorMessageUser= false;
  $errorMessagePass= false;
	$correctMessage= false;
	$NotUser= false;
    $login=array(
        'Daniel' => '0907',
        'Alex' => '0908@',
        'Kenny' => 'csc126',
        'Brandon' => 'csc226',
        'Mart' => 'csc225',
        'Alyssa' => 'csc446',
        'Cody' => 'csc511',
        'Alfonz' => 'csc330',
        'Dolz' => 'csc490',
    );
	if(isset($_POST['submit'])){ //check if submit button is clicked
		$name =htmlspecialchars( $_POST['username']);
		$pwd =htmlspecialchars( $_POST['password']);

		
		if(empty($name)){ //check if $name is empty
			$errorMessageUser=true;
        }
		if(empty($pwd)){
			$errorMessagePass=true;
        }
        if (!isset($login[$name]) or $login[$name] != $pwd){
            $NotUser=true;
        }else{
            $correctMessage=true;
        }           
    

		
	};
?>


<?php 
			if($errorMessageUser){
				echo '<div class="alert alert-danger">';
				echo 'Must enter a user name!';
				echo '</div>';
			}
			if($errorMessagePass){
				echo '<div class="alert alert-danger">';
				echo 'Must enter a password! ';
				echo '</div>';
      }
      if($correctMessage){
				header('Location:  welcome.php?username='.$name);
			}
			if($NotUser){
				echo '<div class="alert alert-danger">';
				echo 'You are not a User';
				echo '</div>';
			}
?>
        
		<form action="Lab2-2.php" method="POST" class='formcss'>
			<fieldset>
            
				<legend>Please Sign In Below! </legend>
				<p>
					<label>Username: 
						<input type="text" name="username" size="20" maxlength="40" value=<?php echo $name ?? ""; ?> >
					</label>
				</p>
				<p>
					<label>Password: 
                        <input type="password" name="password" size="20" maxlength="40" value=<?php echo isset($pwd) ? $pwd : ""; ?> >
					</label>
				</p>
			</fieldset>
			<p>
                <!-- <input type="submit" name="submit" value="Submit Information"> -->
                <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
            
			</p>
	</body>
</html>