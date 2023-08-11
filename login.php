<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellicare Plan</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<style>
.newform {
    width: 30%;
    background: #e8e8e8;
    padding: 35px 25px;
}
.forms {
    height: 100vh;
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    flex-direction: row;
    justify-content: center;
}   
</style>
<body>
<?php
    if(isset($_GET['errorCre']))
    {
        $dangerOne = true;
    }
    if(isset($_GET['error']))
    {
        $dangerTwo = true;
    }
?>
<div class="wrapper">
    <div class="container">
        <div class="mainbox">
            <?php
                if(isset($dangerOne)):
            ?>
            <div class="alert alert-danger">
                Invalid username or password. Please try again.
            </div>
            <?php
                endif;
            ?>
            <?php
                if(isset($dangerTwo)):
            ?>
            <div class="alert alert-danger">
                Account not Exists.
            </div>
            <?php
                endif;
            ?>
            <div class="forms">
            <form method="post" class="newform" action="login_process.php">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" id="form2Example1" class="form-control" />
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="form2Example2" class="form-control" />
                </div>
                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="signup.php">Register</a></p>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>