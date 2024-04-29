<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'database') or die("Connection Failed:" . mysqli_connect_error());


    $stmt = $conn->prepare("select * from customer where id = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();

    $stmt_result = $stmt->get_result();


    // Retrieve the ID from the URL

    // Display the pop-up message with the retrieved ID


}
?>
<script>
    var id = '<?php echo $id; ?>';
    alert('Login successful with registered ID:');</script>"welcome $name";