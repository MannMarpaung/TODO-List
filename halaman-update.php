<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">

<!-- Get Data -->
<?php

$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `tabletodo` WHERE `Id` = '$id'");
$data = mysqli_fetch_array($sql);

?>

<body class="bg-primary" style="background: linear-gradient(to bottom right, purple, blue); height: 100vh; font-family: 'Lobster', sans-serif; font-family: 'Space Grotesk', sans-serif;">
    <form action="update.php" method="post">
        <div class="container justify-content-center" style="height: 90vh; display: flex;">
            <div class="row justify-content-center bg-info m-auto py-5 col-md-8" style="box-shadow: 0 0 20px 1px cyan; border-radius: 4rem">
                <h2 class="text-center">Edit List</h2>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button>
                    <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>