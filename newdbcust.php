<?php

//session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'database');
$n = $_POST['name'];
$id = $_POST['id'];


$pass = $_POST['password'];


$s = "select *from customer where id = '$id'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if ($num == 1) {
    echo '<script>alert("Id already taken")</script>';
    //echo "<div id='message'> id Already Taken </div>";
    // header("registrationcust.php");

} else {



    $reg = " insert into customer(name,id,password) values ('$n','$id','$pass')";

    mysqli_query($con, $reg);


}
?>
<script>
    alert(" Registration Successful");
    window.location.href = "front.php";
</script>