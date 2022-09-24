<?php
include_once ($_SERVER['DOCUMENT_ROOT']).'\crud\config.php';
use App\Categories;

$_id = $_GET['id'];
//Connect to database

$categorys = new Categories;
$category= $categorys->show($_id);


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
                        <div class="col-9"><?= $category['id'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">name</div>
                        <div class="col-9"><?= $category['name'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">link</div>
                        <div class="col-9"><?= $category['link'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">active status</div>
                        <div class="col-9"><?= $category['is_active'] ?></div>
                    </div>
                    <div class="row">
                        <div class="col-3">Draft</div>
                        <div class="col-9"><?= $category['is_draft'] ?></div>
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