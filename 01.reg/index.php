<!doctype html>
<html lang="en">
  <head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body dir="rtl">
    <div class="container mt-4">
      <?php
      if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1 class="float-right">הרשמה</h1>
                <br>
        
        <form action="validation-form/check.php" method="POST">
            <input type="text" class="form-control" name="login" id="login" placeholder="הזינו שם משתמש"> <br>
            <input type="text" class="form-control" name="name" id="name" placeholder="הזינו שם"> <br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="הזינו ססמה"><br>
            <button class="btn btn-success" type="submit">להרשם</button>
        </form>
            </div>
            <div class="col">
                <h1 class="float-right">כניסה</h1>
                <br>
        
        <form action="validation-form/auth.php" method="POST">
            <input type="text" class="form-control" name="login" id="login" placeholder="הזינו שם משתמש"> <br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="הזינו ססמה"><br>
            <button class="btn btn-success" type="submit">כניסה</button>
        </form>
            </div>
      <?php else: ?>
      <p>היי! <?=$_COOKIE['user']?>. כדי לצאת לחץ פה <a href="/exit.php">exit</a>.</p>
            <?php endif;?>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>