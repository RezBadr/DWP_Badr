<?php
include '../assets/php/config.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password =  $_POST['password'];
  $cpassword = $_POST['cpassword'];
  if($password == $cpassword){
      $sql = "SELECT * FROM client WHERE email='$email'";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result)>0){
        echo "<script>alert('L'email existe déjà.')</script>";
      }else{
        $sql = "INSERT INTO client(username,email,password)
                   VALUES('$username','$email','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
           echo "<script>alert('Enregistrement de l'utilisateur terminé')</script>";
            $username = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
      }
      else{
        echo "<script>alert('quelque chose de mal s'est passé.')</script>";
      }
      }  
  }else{
    echo "<script>alert('Le mot de passe ne correspond pas')</script>";
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
    <title>S'inscrire</title>




    <link href="../assets//Css//bootstrap.css" rel="stylesheet">

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
        <div class="container">
            <form action="" method="POST" class="login-email">
                <img src="../assets/images/AdobeStock_427723549.jpeg" alt="" width="90" height="90" alt="">
                <p class="login-text" style="font-size: 2rem;color:#fff; font-weight: 800;">S'inscrire</p>
                <div class="form-floating" style="color: #000;">
                    <input class="form-control" type="text" placeholder="Nom et prenom" name="username" required>
                    <label for="username">Nom et prenom</label>
                </div>
                <div class="form-floating" style="color: #000;">
                    <input class="form-control" type="email" placeholder="Email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-floating" style="color: #000;">
                    <input class="form-control" type="password" placeholder="mot de passe" name="password" required>
                    <label for="password">Mot de passe</label>
                </div>
                <div class="form-floating" style="color: #000;">
                    <input class="form-control" type="password" placeholder="Confirmez le mot de passe" name="cpassword"
                        required>
                    <label for="cpassword">Confirmez le mot de passe</label>
                </div>
                <div>
                    <button name="submit" type="submit" class="btn btn-light">S'inscrire</button>
                </div>
                <p> <a href="Sign-in.php">Se connecter</a></p>
            </form>
        </div>
    </main>



</body>

</html>