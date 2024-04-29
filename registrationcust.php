<!DOCTYPE html>
<HTML>
<title>user form</title>
<style>
    .a {
        text-align: center;
        border: 3px solid red;
        font-family: "times new roman", serif;
        background-color: lightsalmon;
    }



    .b {
        height: 40px;
        width: 120px;
        font-size: 40;
        border: none;
        background: none;
        padding: 0;

    }
</style>

<h1 class="a">Registration</h1>
</br>



<form action='newdbcust.php' method="POST" style="text-align:center;">

    <label for="name">userid:</label>
    <input type='text' placeholder="text" name="name" required /><br><br>

    <label for="id">userid:</label>
    <input type='email' placeholder="email" name="id" required /><br><br>

    <label for="password">password:</label>
    <input type='password' name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}"
        required /><br><br>
    <h4>
        Password must be at least 8 characters long and contain at least one uppercase letter,</br>
        one lowercase letter, one number, and one special character.
    </h4>

    <input type='submit' name='submit' id="submit" />

</form>

</div>




</body>

</html>