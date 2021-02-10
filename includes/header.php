<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FORUM</title>
    <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
    
<!-- ----------------------------------------------------------------------- -->
<!-- TAILWIND NAVBAR TANGINA -->
<nav class="bg-gradient-to-r from-navleft via-navmid-100 to-navmid-100 p-2 mt-0 fixed w-full z-10 top-0">
<!-- TAILWIND NAVBAR TANGINA -->
    
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        </button>
          </div>
            <!-- <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
              </div> -->
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4 justify-end">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <!-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">HOME</a>
              <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Disscusion</a>
              <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About Us</a> -->
            <!-- REMOVE LOGIN INPUTS WHEN USER LOGGED IN -->
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {  
              // IF USER LOGGED IN  
              echo "<a href=\"#\" class=\"text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium\">Home</a>";
              echo "<a href=\"\" class=\"text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium\">About Us</a>";  
              echo "<a href=\"#\" class=\"text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium\">My profile</a>";
              echo "<a href=\"includes/logout.php\" class=\"text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium\">Logout</a>"; } 
            else { 
              // IF USER NOT LOGGED IN
              echo "<form method=\"POST\" action=\"login.php\">
                <input type=\"text\" name=\"login\" placeholder=\"Username or Email\"  class=\"px-3 py-2 rounded text-sm font-medium\">
                <input type=\"password\" name=\"password\" placeholder=\"Password\" class=\"px-3 py-2 rounded text-sm font-medium\">             
                <button type=\"submit\" name=\"submit\" value=\"Login\" class=\"text-white px-3 py-2 rounded bg-navleft text-sm font-medium \">Login</button>
                </form>"; };?>    
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

<script src="../js/util.js"></script>

<center>
      <h1 class="text-5xl"><a href="index.php">SVCC FORUM HOMEPAGE</a></h1>

<br>
  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "";
  

  }else{
    echo "<div class=\"flex justify-center w-96 max-h-96 rounded\">
          <img src=\"assets/wizard.jpeg\"></div>";
  }?>
</center>
