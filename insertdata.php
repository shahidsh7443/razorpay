<?php
require('config.php');
  echo "<script>alert('Student Added Successfully.') </script>";
  $que=mysqli_query($con,"insert into items values('','$w3ls_item','$amount')");
?>
