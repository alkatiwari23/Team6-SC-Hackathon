    <!-- This page is the front-end page which will be shown to user after register/login -->

<!DOCTYPE html>
<html>
  <head>
    <title>Women Budgeting Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="g.jfif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@800&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  </head>
  <body>
    <div class="conatiner-fluid align-items-center">
    <div class="container-fluid align-items -center">
      <div class="row align-items-center">
        <div class="jumbotron-text align-items-center">
        <?php 
    include 'connection.php';
        /*
            This Page is session protected as you can see the following code checks
                whether there is any session variable known as name is set or not. 
                    As If not set that means user have to login/register first 
        */
    if(!isset($_SESSION["firstname"]))
    {
        header("Location: index.html");
        die();
    }
           echo "<h1>Welcome ".$_SESSION["firstname"]."</h1>
            <h2> Your Contact Number: ".$_SESSION['phone']."</h2>
            <h2> Your Email: ".$_SESSION['email']."</h2>"; ?>
    </div><br><br><br>
    <div class="row align-items-center">
        <div class="col-12 col-sm-4 offset-1">
         <a class="btn-lg btn-dark " href="signout.php">Signout</a>
</div>
        <div class="col-12 col-sm-4">
         <a class="btn-lg btn-dark " href="create_goal.php">Create Goal</a>
</div>
        <div class="col-12 col-sm-3">
         <a class="btn-lg btn-dark " href="mange_goal.php">Manage Goal</a>
</div>
  </div>
</div>
</div>
</div>
</body>
</html>