<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="px-2">

        <form action="koneksi.php" method="post">
            <div>
                <h3>nama</h3>
                <input type="text" name="nama">
            </div>
            <div>
                <h3>email</h3>
                <input type="text" name="email">
            </div>
            <div>
                <h3>pesan</h3>
                <textarea name="pesan" id="pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-success">simpan</button></button>
        </form>
    </div>
</body>
</html>