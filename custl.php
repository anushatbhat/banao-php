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

    body {}
</style>
<h1 class="a">Login</h1>

<form action='custldb.php' method="POST" style="text-align:center;">

    <label for="name">user:</label>
    <input type='text' name="name" required /><br><br>

    <label for="id">userid:</label>
    <input type='email' name="id" required /><br><br>

    <label for="password">password:</label>
    <input type='password' name="password" required /><br><br>

    <input type='submit' name='submit' id="submit" />
</form>
</div>




</body>

</html>