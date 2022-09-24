<?php
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=eccomerce_b5", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `categories`";
$stmt = $conn->prepare($query);
$result = $stmt->execute();

$rows = $stmt->fetchAll();
// var_dump($banners);
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
    <section class="container">
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
                    <h1 class="text-center mb-3">Category Lists</h1>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Link</th>
                                <th scope="col">Active</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if(sizeof($rows)<=0){
                                echo "<td>No Data</td>";
                            }
                            else{
                                foreach($rows as $row){?>
                            <tr>
                                <td><?= $row['id'];?></td>
                                <td><?= $row['name'];?></td>
                                <td><?= $row['link'];?></td>
                                <td><?= $row['is_active'];?></td>
                                <td class="d-flex"> <a class="btn btn-primary me-2"
                                        href="show.php?id=<?= $row['id']; ?>">Show</a>
                                    <a class="btn btn-primary me-2" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                                    <a class="btn btn-primary " href="delete.php?id=<?= $row['id']; ?>">Delete</a>
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