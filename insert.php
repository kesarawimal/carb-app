<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $title=$_POST['title'];
 $description=$_POST['description'];
 $count=$_POST['count'];
 $q=mysqli_query($con,"INSERT INTO `food_details` (`title`,`description`,`count`) VALUES ('$title','$duration','$price')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>