<?php
include '../assets/php/config.php';
session_start();
if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM client WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows > 0){
       $row = mysqli_fetch_assoc($result);
       $_SESSION['username'] = $row['username'];
       header("Location:Employe.php");
  }else{
    echo "<script>alert('Email ou le mot de passe est faux')</script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin</title>


    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <link href="../assets//Css//signin.css" rel="stylesheet">
</head>

<body class="text-center"
    style="background-image: url(../assets/images/pg3.webp); background-repeat: no-repeat;background-size: cover;">

    <main class="form-signin" style="background-color: rgba(0, 0, 0, 0.7);color: #000; border-radius: 15px;">
        <form action="" method="POST" class="login-email">
            <img src="../assets/images/AdobeStock_427723549.jpeg" alt="" width="90" height="90" alt="">
            <p class="login-text" style="font-size: 2rem;color:#fff; font-weight: 800;">Se connecter</p>
            <div class="form-floating" style="color: #000;">
                <input class="form-control" type="email" placeholder="Email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating" style="color: #000;">
                <input class="form-control" type="password" placeholder="mot de passe" name="password" required>
                <label for="password">Mot de passe</label>
            </div>
            <div>
                <button name="submit" type="submit" class="btn btn-light">Se connecte</button>
            </div>
        </form>
        <hr class="my-4">
        <div class="checkbox mb-3"></div>
        <p class="mt-5 mb-3 text-muted"><a href="#">mot de passe oublie</a></p>
        <a href="Sign-up.php"><button class="w-100 btn-dark btn-link" style="width: 50%;" type="submit">Creer nouveau
                compte</button></a>
    </main>



</body>

</html>