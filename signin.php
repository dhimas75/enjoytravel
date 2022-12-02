<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! email dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6f53881389.js"></script>
    <title>SignIn Enjoy Travel</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    <title>Sign in</title>
</head>
<body>
    
<section class="login py-5 bg-light">
      <div class="container">
          <div class="row g-0">
            <div class="col-lg-5">
              <img src="https://i2.wp.com/blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg" class="gambar img-fluid">
            </div>
            <div class="col-lg-7 text-center py-5">
              <h1 class="">Sign In</h1>
           
              <form action="cek_login.php" method="post">
                <input type="hidden" name="id" value="">
                <div class="form-row py-2 pt-5">
                  <div class="offset-1 col-lg-10">
                    <input type="text" class="kotakinput px-3" placeholder="Masukkan Email" name="email" required="true">
                  </div>
                </div>
                <div class="form-row py-2 pt-5">
                  <div class="offset-1 col-lg-10">
                    <input type="password" class="kotakinput px-3" placeholder="Masukkan Password" name="password" required="true">
                  </div>
                </div>   
                <div class="form-row py-2 pt-5">
                  <div class="offset-1 col-lg-10">
                  <button type="submit" value="Login">Sign In</button>
                  </div>
                </div>
              </form>

              <p href="signup.php" class="gapunyaakun py-3">Don't have an account? <a href="signup.php">Sign up here!</a></p>
            </div>
          </div>
      </div>
    </section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>