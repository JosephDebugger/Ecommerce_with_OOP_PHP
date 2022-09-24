<?php
$_id = $_GET['id'];
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=eccomerce_b5", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$webroot = "http://localhost/bitm/session13/crud/";

$query = "SELECT * FROM `products` WHERE id = :id";
$stmt = $conn->prepare($query);
 $stmt->bindParam(':id', $_id);
$result = $stmt->execute();

$banner = $stmt->fetch();
//print_r($banner['picture']);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center mb-3">Show</h1>
                    <div class="row">
                        <div class="col-3">ID</div>
                        <div class="col-9"><?= $banner['id'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">Title</div>
                        <div class="col-9"><?= $banner['title'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">Created At</div>
                        <div class="col-9"><?= $banner['created_at'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">Modified</div>
                        <div class="col-9"><?= $banner['modified_at'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">Is Active</div>
                        <div class="col-9"><?= $banner['is_active'] ? "Active" : "Inactive" ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">Picture<img src="" alt=""></div>
                        <div class="col-9">
                            <?= $banner['picture'];?>

                        </div>
                    </div>
                    <div class="row">
                        <img class="img-fluid" src="<?=$webroot;?>uploads/<?= $banner['picture'];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>