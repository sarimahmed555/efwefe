<?php
if(isset($_POST['submit_btn'])){
     $fullname=$_POST['fullname'];
     $email=$_POST['email'];
     $message=$_POST['message'];

        $con=mysqli_connect("localhost","root","","shopping");
        $query="INSERT INTO `contact`(`id`, `fullname`, `email`, `message`) VALUES (NULL,'{$fullname}','{$email}','{$message}')";
        $sql=mysqli_query($con,$query); 
    }

?>
