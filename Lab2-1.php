<?php
	$errorMessage= false;
	$correctMessage= false;;
	$invalidSyntax= false;
	
	$pattern = "/^[1-9][0-9]{2}(\.|\-)[0-9]{3}(\.|\-)[0-9]{4}$/";
	if(isset($_GET['submit'])){ 
		$number =htmlspecialchars( $_GET['phoneNumber']);
		
		if(empty($number)){ 
			$errorMessage=true;
		}
		if(!empty($number) and preg_match($pattern,$number)){
			$correctMessage=true;
			}
		  else if (!empty($number) and !preg_match($pattern,$number)){
			$invalidSyntax=true;
		  }
		
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/lab2a.css">
    <title>Lab 2-Part1</title>
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
			if($errorMessage){
				echo '<div class="alert alert-danger">';
				echo 'Must enter a valid phone number!';
				echo '</div>';
			}
			if($correctMessage){
				echo '<div class="alert alert-success">';
				echo 'Phone number is valid! ';
				echo '</div>';
			}
			if($invalidSyntax){
				echo '<div class="alert alert-danger">';
				echo 'Must enter in correct syntax';
				echo '</div>';
			}
?>
		<form action="" class="main-form needs-validation">
		<div class="form-group">
		<label for="numbers">Phone Number</label>
		<input type="text" name="phoneNumber" class="form-control" value=<?php echo $number ?? ""; ?> >
       <small class="form-text text-muted">xxx.xxx.xxx or xxx-xxx-xxxx</small>
			
			<button type="submit" class="btn btn-primary" name="submit" value="Submit Information" >Submit</button>
		</div>
		</form>	
	</body>
</html>