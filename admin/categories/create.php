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
                            <label for="inputTitle" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="name" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Link:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTitle" name="link" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="active" value="1"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Active
                                </label>
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <div class="form-check">
                                <input class="form-check-input" name="draft" type="checkbox" value="1"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Draft
                                </label>
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <div class="form-check">
                                <input class="form-check-input" name="draft" type="checkbox" value="1"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Picture
                                </label>
                            </div>

                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
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