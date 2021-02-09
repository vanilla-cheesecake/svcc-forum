<?php include 'php/connect.php';
// If user not logged in, they cannot access the page
if(empty($_SESSION['username'])){header('Location: index.php');}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    
    <title>FORUM</title>
</head>
<body>
    <center>
        <h1></h1>
    <?php if(isset($_SESSION['success'])): ?>
        <strong><?php echo $_SESSION['success']; 
                unset($_SESSION['success']); ?></strong>
    <?php endif; ?>
    </center>



      <!---Main Navbar-->
      <nav class="navbar navbar-dark">
          <div class="container">
          <h1><a href="main.php" class="navbar-brand">SVCC FORUM HOMEPAGE</a></h1>
          <form class="form-inline">
         <input type="text" class="form-control  mr-3 mb-2 mb-sm-0" placeholder="search">
         <button type="submit" class="btn btn-dark">Search</button>
          </form>
        </div>
      </nav>
      <!---End of Main Navbar-->

            <!---Breadcrumb Nav-->
            <div class="container my-3">
      <nav class="breadcrumb ">
      
      <a class="active" href="main.php">Home</a>
        <a href="#">Discussion</a>
        <a href="user_profile.php" id="button" class="button" >My Profile</a>
        <a href="#">About Us</a>
        <a href="php/logout.php">Logout</a>
        
          
    
      </nav>
      <!---End of Breadcrumb Navbar-->

<!--end of Aside Section-->




      <!--End of Category-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<script>
    document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
</script>
</html>