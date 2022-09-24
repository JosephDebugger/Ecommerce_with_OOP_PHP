<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="text-center mb-3">Add New</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputId" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="inputId" name="id" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="title" value="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-12 form-check">
                                    <input class="form-check-input" type="checkbox" name="is_active" value="1"
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Is Active
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Picture:</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="inputImg" name="img" value="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>