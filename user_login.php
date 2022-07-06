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
        <form action="user_home.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Username</label> 
                <input type="text" class="form-control" name="uname">
            </div>
            <div class="mb-3">
                <label>Password</label> 
                <input type="password" class="form-control" name="pwd">
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        </form>
  </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


