<?php include 'php/connect.php';
// If user not logged in, they cannot access the page
if(empty($_SESSION['username'])){header('Location: login.php');}?>

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
        <a href="user_profile.php" >My Profile</a>
        <a href="#">About Us</a>
        <a href="php/logout.php">Logout</a>
        
          
    
      </nav>
      <!---End of Breadcrumb Navbar-->
      <!---Category -->
      <div class="row">
      <div class="col-12 col-xl-9">
      <h2 class="h4 category mb-0 p-4 rounded-top text-light">Category</h2>
      <table class="table table-striped table-bordered table-responsive">
          <thead class="thead-light">
              <tr>
                  <th scope="col" class="forum-col">Forum</th>
                  <th scope="col">Topics</th>
                  <th scope="col">Posts</th>
                  <th scope="col" class="last-post-col">Last Posts</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td>
                <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                  adipisicing elit. Velit, praesentium?</p>
                  </td>
                  <td>
                      <div>8</div>
                  </td>
                  <td>30</td>
                  <td>
                      <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                      <div> by <a href="#">Author Name</a></div>
                      <div> 11 Nov 2019, 16:11</div>
                  </td>
              </tr>
              <tr>
                    <td>
                    <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                      adipisicing elit. Velit, praesentium?</p>
                      </td>
                      <td>
                          <div>8</div>
                      </td>
                      <td>30</td>
                      <td>
                          <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                          <div> by <a href="#">Author Name</a></div>
                          <div> 11 Nov 2019, 16:11</div>
                      </td>
                  </tr>
                  <tr>
                        <td>
                        <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                          adipisicing elit. Velit, praesentium?</p>
                          </td>
                          <td>
                              <div>8</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                              <div> by <a href="#">Author Name</a></div>
                              <div> 11 Nov 2019, 16:11</div>
                          </td>
                      </tr>
                      <tr>
                            <td>
                            <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                              adipisicing elit. Velit, praesentium?</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                                  <div> by <a href="#">Author Name</a></div>
                                  <div> 11 Nov 2019, 16:11</div>
                              </td>
                          </tr>
          </tbody>
      </table>
      <h2 class="h4 category mb-0 p-4 rounded-top text-light">Category</h2>
      <table class="table table-striped table-bordered table-responsive">
          <thead class="thead-light">
              <tr>
                  <th scope="col" class="forum-col">Forum</th>
                  <th scope="col">Topics</th>
                  <th scope="col">Posts</th>
                  <th scope="col" class="last-post-col">Last Posts</th>
              </tr>
          </thead>
          <tbody>
            <tr>
            <td>
            <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
           <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
              adipisicing elit. Velit, praesentium?</p>
           </td>
                  <td>
                      <div>8</div>
                  </td>
                  <td>30</td>
                  <td>
                      <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                      <div> by <a href="#">Author Name</a></div>
                      <div> 11 Nov 2019, 16:11</div>
                  </td>
              </tr>
              <tr>
                    <td>
                    <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                      adipisicing elit. Velit, praesentium?</p>
                      </td>
                      <td>
                          <div>8</div>
                      </td>
                      <td>30</td>
                      <td>
                          <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                          <div> by <a href="#">Author Name</a></div>
                          <div> 11 Nov 2019, 16:11</div>
                      </td>
                  </tr>
                  <tr>
                        <td>
                        <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                          adipisicing elit. Velit, praesentium?</p>
                          </td>
                          <td>
                              <div>8</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                              <div> by <a href="#">Author Name</a></div>
                              <div> 11 Nov 2019, 16:11</div>
                          </td>
                      </tr>
                      <tr>
                            <td>
                            <h3 class="h5"><a href="#">Forum Name</a></h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                              adipisicing elit. Velit, praesentium?</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                                  <div> by <a href="#">Author Name</a></div>
                                  <div> 11 Nov 2019, 16:11</div>
                              </td>
                          </tr>
          </tbody>
      </table>
      <h2 class="h4 category mb-0 p-4 rounded-top text-light">Category</h2>
      <table class="table table-striped table-bordered table-responsive">
          <thead class="thead-light">
              <tr>
                  <th scope="col" class="forum-col">Forum</th>
                  <th scope="col">Topics</th>
                  <th scope="col">Posts</th>
                  <th scope="col" class="last-post-col">Last Posts</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td>
                <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                  adipisicing elit. Velit, praesentium?</p>
                  </td>
                  <td>
                      <div>8</div>
                  </td>
                  <td>30</td>
                  <td>
                      <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                      <div> by <a href="#">Author Name</a></div>
                      <div> 11 Nov 2019, 16:11</div>
                  </td>
              </tr>
              <tr>
                    <td>
                    <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                      adipisicing elit. Velit, praesentium?</p>
                      </td>
                      <td>
                          <div>8</div>
                      </td>
                      <td>30</td>
                      <td>
                          <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                          <div> by <a href="#">Author Name</a></div>
                          <div> 11 Nov 2019, 16:11</div>
                      </td>
                  </tr>
                  <tr>
                        <td>
                        <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur 
                          adipisicing elit. Velit, praesentium?</p>
                          </td>
                          <td>
                              <div>8</div>
                          </td>
                          <td>30</td>
                          <td>
                              <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                              <div> by <a href="#">Author Name</a></div>
                              <div> 11 Nov 2019, 16:11</div>
                          </td>
                      </tr>
                      <tr>
                            <td>
                            <h3 class="h5 mb-0"><a href="#">Forum Name</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur 
                              adipisicing elit. Velit, praesentium?</p>
                              </td>
                              <td>
                                  <div>8</div>
                              </td>
                              <td>30</td>
                              <td>
                                  <h4 class="h6 mb-0"><a href="#"> Post Name</a></h4>
                                  <div> by <a href="#">Author Name</a></div>
                                  <div> 11 Nov 2019, 16:11</div>
                              </td>
                          </tr>
          </tbody>
      </table>
      </div>
<!--Aside Section-->
<div class="col-12  col-xl-3">
<aside>
    <div class="row">
        <div class="col-12 col-sm-6 col-xl-12">
    <div class="card mb-3 mb-sm-0 mb-xl-3">
        <div class="card-body">
            <h2 class="h4 card-title">Members Online</h2>
            <ul class="list-noStyle mb-0">
                <li><a href="#">Member Name</a></li>
                <li><a href="#">Member Name</a></li>
                <li><a href="#">Member Name</a></li>
                <li><a href="#">Member Name</a></li>
                <li><a href="#">Member Name</a></li>

            </ul>
        </div>
        <div class="card-footer">
            <dl class="row mb-0">
                <dt class="col-8"> Total:</dt>
                <dd class="col-4 mb-0">20</dd>
            </dl>
            <dl class="row mb-0">
                 <dt class="col-8"> Members:</dt>
                 <dd class="col-4 mb-0">10</dd>
             </dl>
             <dl class="row mb-0">
             <dt class="col-8"> Guests:</dt>
              <dd class="col-4 mb-0">6</dd>
              </dl>
        </div>
    </div>
</div>
<div class="col-12 col-sm-6 col-xl-12">
    <div class="card">
        <div class="card-body">
            <h2 class="h4 card-title">Statistics</h2>
            <dl class="row mb-0">
                    <dt class="col-8"> Total Forums</dt>
                    <dd class="col-4 mb-0">20</dd>
                </dl>
                <dl class="row mb-0">
                     <dt class="col-8"> Topics</dt>
                     <dd class="col-4 mb-0">10</dd>
                 </dl>
                 <dl class="row mb-0">
                 <dt class="col-8"> Total Members</dt>
                  <dd class="col-4 mb-0">6</dd>
                  </dl>
        </div>
    </div>
    </div>
</div>
</aside>
</div>
</div>
</div>
<!--end of Aside Section-->
<!--Footer-->
<footer class="small bg-info">
    <div class="container">
    <ul class="list-inline mb-0">
    <li class="list-inline-item text-light">&copy; 2021 Gay Lloyrd Company</li>
        <li class="list-inline-item"><a href="#" class="text-light">Privacy Policy</a></li>
        </ul>
    </div>
</footer>



<!---End of Footer-->



      <!--End of Category-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>