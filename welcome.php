    <!-- This page is the front-end page which will be shown to user after register/login -->
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
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page</title>
    </head>
    <body>
        <h1>Welcome</h1>
    </body>
</html>

