<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">

    <style>
        .btn {
            transition: box-shadow 0.3s;
        }

        .b1:hover {
            box-shadow: 0 0 10px green;
        }

        .b2:hover {
            box-shadow: 0 0 10px orange;
        }

        .b3:hover {
            box-shadow: 0 0 10px red;
        }
    </style>

</head>

<body style="background: linear-gradient(to bottom right, aqua, blue); height: 100%; font-family: 'Lobster', sans-serif; font-family: 'Space Grotesk', sans-serif;">
    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justify-content-center text-bg-primary m-auto mt-3 py-3 col-md-6 rounded-3" style="box-shadow: 0 0 10px 0px blue;">
                <h2 class="text-center">To Do List</h2>
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="b1 btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </form>

    <!-- Get Data From LocalHost -->
    <?php

    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `tabletodo`");

    $i = 1;

    ?>

    <!-- Tampilkan Data -->
    <div class="container">
        <div class="m-auto col-9 mt-3" style="box-shadow: 0 0 10px 1px white;">
            <table class="table align-middle table-striped table-primary table-hover">
                <thead>
                    <tr class="table-light">
                        <th>No</th>
                        <th>List</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    while ($row = mysqli_fetch_array($sql)) {

                    ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row["list"] ?></td>
                        <td style="width: 10%;"><a href="halaman-update.php? ID= <?php echo $row['Id'] ?>" class="b2 btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td style="width: 10%;"><a href="delete.php? ID= <?php echo $row['Id'] ?>" class="b3 btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>