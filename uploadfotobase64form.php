<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload data mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <form action="formbase64.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3"> 
                <input type="text" class="form-control" name="nim" placeholder="nim">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nama" placeholder="nama">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="alamat" placeholder="alamat">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" name="foto" >
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        </form>
  </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


