<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FORUM</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
      body{
        background-image: url("background.png");
      }
    </style>
    
</head>
<body class="bg-purple-50   " background="background.png">
<div class="bg-fixed" style="background-image: url('background.png')"></div>
<!-- ----------------------------------------------------------------------- -->
<!-- TAILWIND NAVBAR TANGINA -->
<nav class="bg-gradient-to-r from-navleft via-navmid-100 to-navmid-100 p-2 mt-0 fixed w-full z-10 top-0">
<!-- TAILWIND NAVBAR TANGINA -->
    
              <div class="flex pr-10 justify-end">
                  <!-- IF LOGGED IN STATUS IS TRUE -->
                  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {  
                    // IF USER LOGGED IN SHOW THIS 
                    include('html/navmenu.html');}
                  else { 
                    // IF USER NOT LOGGED IN SHOW THIS
                    include('html/login.html');
                  };?>    
              </div>
            </div>       
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>




