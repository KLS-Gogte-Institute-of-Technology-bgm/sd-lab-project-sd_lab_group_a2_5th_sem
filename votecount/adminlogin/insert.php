<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";
$conn = mysqli_connect($server , $username , $password , $dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['url'])){
        $url = $_POST['url'];
        $query = "insert into form(url) values('$url')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
            echo "Form submitted succesfully"; 
        }
        else{
            echo "Form not submitted";
        }
        }
        else{
            echo "all fields are required";
        }

    }