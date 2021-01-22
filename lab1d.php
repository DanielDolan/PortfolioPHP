<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/lab1d.css">
    <title>Lab1D</title>
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
    <!-- Displaying array or fruits using for loop -->
   <?php
       $fruits = ["Strawberry", "Banana", "Blueberry", "Raspberry", "Mango"];
   ?>

   <h2 class="text-center">Using a foor loop to display array or fruits </h2>
   <ul class="list-group list-group-flush text-center">
       <?php
           for($i = 0; $i < count($fruits); $i++){
               echo "<li>".$fruits[$i]."</li>";
           }
       ?>
   </ul>

<!-- Now displaying same array using foreach loop -->
   <h2 class="text-center"> Using a foreach loop to display array of fruits </h2>
   <ul class="list-group list-group-flush text-center">
       <?php
           foreach ($fruits as $fruit){
               echo "<li>".$fruit."</li>";
           }
       ?>
   </ul>

   <!-- Using arsort method, sorts items of array in descending order (z-a) -->
   <?php arsort($fruits); ?>

   <h3 class="text-center"> We have sorted the array using the arsort method. As you can see, arsort has sorted the array in a descending order (Z-A). Arsort is a function that sorts an associative array in decending order.  </h3>
   <ul class="list-group list-group-flush text-center ">
       <?php
           foreach ($fruits as $fruit){
               echo "<li>".$fruit."</li>";
           }
       ?>
   </ul>
<!-- Teacher gave us, have to explain and output -->
   <?php
       $users = array(
           1 => array("user1" => "password1"),
           2 => array("user2" => "password2"),
           "3" => array("user3" => "password3"),
           array("user4" => "password4"),
       );
      
   ?>

   <h3 class="text-center"> The array #users is a multidimensional array. By being multidimensional, the values of the array are actually independent linear arrays. </h3>
   <table class="table text-center ">
    <tr>
            <th>Username</th>
            <th>Password</th>
    </tr>
 
       <?php
           foreach ($users as $key => $userpass) { //set to userpass and then another for each using userpass and setting it to new variables/keys
               echo "<tr>";
               foreach ($userpass as $key2 => $val2) { //setting userpass
                   echo "<td>".$key2."</td>";
                   echo "<td>".$val2."</td>";
                }
                echo "</tr>";
           }
       ?>
     </table>

</body>
</html>

