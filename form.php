<?php
if (isset($_POST["submit"])) {
  echo "<script>alert('Form Submitted')</script>";
  echo "<pre>";
  print_r($_POST);
  echo "<pre>";
  echo "<h1>The Product is Added</h1><!--";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./new.css" />
    <title>Register-Product</title>
  </head>
  <body>
    <section id="registration">
      <div class="form">
        <h3>Register your Product</h3>
        <form action="form.php" method="post">
        <input type="text" placeholder="Name of Product" name="Name of Product" id="" required/>
        <br>
        <input type="number" placeholder="Registration Number of Product" name="Registration Number of Product" id="" required/>
        <br>
        <input type="number" placeholder="Price of Product" name="Price of product" id="" required/>
        <br>
        <div class="btn">
          <input type="submit" name="submit" class="blue" id="submit">
        </form>
        </div>
      </div>
    </section>
  </body>
</html>
