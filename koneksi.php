<?php
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['pesan'])){
    $username = ($_POST['nama']);
    $email = ($_POST['email']);
    $pesan = ($_POST['pesan']);
    //echo "Pendaftaran berhasil untuk: " . $username;

}?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $username ?></h1>
    <h1><?php echo $email ?></h1>
    <h1><?php echo $pesan ?></h1>
    <a href="index.php" class="btn btn-info">BACK</a>
</body>
</html>