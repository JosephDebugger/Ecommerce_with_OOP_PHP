<?php

include_once ($_SERVER['DOCUMENT_ROOT']).'\crud\config.php';
include_once ($_SERVER['DOCUMENT_ROOT']).'\crud\authenticator.php';

use App\Banners;


$banner = new Banners;
$banners = $banner->index();
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center mb-3">Lists</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if(sizeof($banners)<=0){
                                echo "<td>No Data</td>";
                            }
                            else{
                                foreach($banners as $banner){?>
                            <tr>
                                <td><?= $banner['title'];?></td>
                                <td><a href="show.php?id=<?= $banner['id']; ?>">Show</a> |
                                    <a href="edit.php?id=<?= $banner['id']; ?>">Edit</a> |
                                    <a href="trash.php?id=<?= $banner['id']; ?>">trash</a>
                                </td>

                            </tr>
                            <?php }
                            }?>

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