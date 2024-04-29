<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'database') or die("Connection Failed:" . mysqli_connect_error());
    if (isset($_POST['id']) && isset($_POST['password'])) {
        $n = $_POST['name'];
        $name = $_POST['id'];
        $age = $_POST['password'];


        $stmt = $conn->prepare("select * from customer where id = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();

        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
        }
        if ($data['password'] === $age) {
            echo "<div id='message'> Welcome $n!</div>";
            // header('location:front.php');
        } else {
            echo '<script>alert("Invalid Email or password")</script>';
        }
    }
}
?>
<script>

    //window.location.href = "custl.php";
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        /* Center the content horizontally and vertically */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>

    <script>
        // JavaScript to hide the message after 2 seconds
        setTimeout(function () {
            document.getElementById('message').style.display = 'none';
        }, 4000); // 2000 milliseconds = 2 seconds
    </script>

</body>

</html>