<?php

$conn = mysqli_connect("localhost", "root", "", "aliraza");
if (isset($_POST["login"])) {
    $useremail = $_POST["useremail"];
    $password = $_POST["userpassword"];

    $sql = "SELECT * FROM users WHERE user_email = '$useremail' AND userpassword = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num) {
        header("location: ./index.php");
    } else {

        echo "<h6 class='text-centre text-danger'>login error accrued</h6>";

    }
}





?>
<!doctype html>
<html lang="en">

<head>
    <title>login form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <h1 class="text-center text-primary">login Here</h1>
    <div class="container w-50 d-flex justify-content-center">
        <form action="login.php" class="from-group bg-primary mt-5 p-5" method="post">
            <input type="text" name="useremail" class="form-control" placeholder="Enter your email"><br>
            <input type="text" name="userpassword" class="form-control" placeholder="Enter your password"><br>
            <button type="submit" name="login" class="btn btn-success">login</button>

            <a href="./login.php" class="text-black">visit login page</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>