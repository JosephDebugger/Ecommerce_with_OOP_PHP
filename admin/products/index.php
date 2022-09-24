<?php
include_once ($_SERVER['DOCUMENT_ROOT']).'\BITM\session13\crud\config.php';

use App\Products;


$products = new Products();
$products = $products->index();
//var_dump($banners);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <section>
        <ul class="nav nav-tabs">

            <li class="nav-item">
                <a class="nav-link" href="index.php">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create.php">Add New</a>
            </li>

        </ul>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center mb-3">Products Lists</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($products as $product) :
                            ?>
                            <tr>
                                <td><?= $product['title']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="show.php?id=<?= $product['id']; ?>">Show</a>
                                    <a class="btn btn-primary" href="edit.php?id=<?= $product['id']; ?>">Edit</a>
                                    <a class="btn btn-primary" href="delete.php?id=<?= $product['id']; ?>">Delete</a>
                                    <a>
                                </td>
                            </tr>
                            <?php
                            endforeach;
                            ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>