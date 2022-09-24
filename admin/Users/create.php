<?php

include_once ($_SERVER['DOCUMENT_ROOT']).'\BITM\session13\crud\config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class=" heading ">
            <h1 class="col-sm-6 m-2 mx-auto">User Registration</h1>
            <?php
            if(array_key_exists('message',$_SESSION) && $_SESSION['message'] !='') :
            ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['message'];
                 $_SESSION['message'] ='';
                 ?>
            </div>
            <?php endif ?>
            <hr>
        </div>
        <form action="store.php" method="POST" enctype="multipart/form-data">
            <div class="col-sm-6 mb-2 mx-auto">
                <div class="input-group">
                    <span class="input-group-text col-sm-3">Full Name</span>
                    <input type="text" aria-label="First name" name="full_name" class="form-control">
                </div>
            </div>
            <div class="col-sm-6 mb-2 mx-auto">
                <div class="input-group">
                    <span class="input-group-text col-sm-3">User Name</span>
                    <input type="text" aria-label="User name" name="user_name" class="form-control">
                </div>
            </div>

            <div class="col-sm-6 mb-2 mx-auto">
                <div class="input-group">
                    <span class="input-group-text col-sm-3">Email</span>
                    <input type="email" aria-label="Email" name="email" class="form-control">
                </div>
            </div>

            <div class="col-sm-6 mb-2 mx-auto">
                <div class="input-group">
                    <span class="input-group-text col-sm-3">Mobile</span>
                    <input type="text" aria-label="First name" name="phone" class="form-control">
                </div>
            </div>

            <div class="col-sm-6 mb-2 mx-auto">
                <div class="input-group">
                    <span class="input-group-text col-sm-3">Password</span>
                    <input type="password" aria-label="Password" name="password" class="form-control">
                </div>
            </div>

            <div class="col-sm-6 mb-2 mx-auto">
                <div class="input-group">
                    <input type="submit" aria-label="Password" name="submit" class="form-control btn btn-success">
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>