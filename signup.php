<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6f53881389.js"></script>
    <title>SignUp Enjoy Travel</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    <title>Document</title>
</head>
<body>
    
<section class="login py-5 bg-light">
      <div class="container">
          <div class="row g-0">
            <div class="col-lg-5">
              <img src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg" class="gambar img-fluid">
            </div>
            <div class="col-lg-7 text-center py-5">
              <h1 class="">Sign Up</h1>
           
              <form action="signup-check.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
    
          <div class="form-row py-2 pt-5">
          <div class="offset-1 col-lg-10">
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
               class="kotakinput px-3"
               required="true"
                      name="email" 
                      placeholder="Masukan Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      required="true"
                      class="kotakinput px-3"
                      placeholder="Masukan Email"><br>
          <?php }?>
          </div>
          </div>
          <div class="form-row py-2 pt-5">
          <div class="offset-1 col-lg-10">
     	        <input type="password" 
               class="kotakinput px-3"
                    name="password" 
                    required="true"
                    placeholder="Password"><br>
          </div>
          </div>

          <div class="form-row py-2 pt-5">
          <div class="offset-1 col-lg-10">
     	        <button type="submit">Sign Up</button>
              <a href="signin.php">
          </div>
          </div>
     </form>

              <p class="gapunyaakun py-3">Already signed up? <a href="signin.php">Sign in!</a></p>
            </div>
          </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>