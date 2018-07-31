<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $title=$_POST['title'];
 $description=$_POST['description'];
 $count=$_POST['count'];
 $q=mysqli_query($con,"UPDATE `food_details` SET `title`='$title',`description`='$description',`count`='$count' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>