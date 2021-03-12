<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script
      src="https://kit.fontawesome.com/1935d064dd.js"
      crossorigin="anonymous"
    ></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Design Agency  </title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media-query.css" />
  <link rel="stylesheet" href="css/style.css"/>
</head>   
<body>

<header>
      <div class="container">
        <nav>
          <!-- LOGO -->
          <img class="logo" src="./images/main-logo.png" alt="" />
          <!-- HAMBURGER ICON -->
          <div class="hamburger">
            <i class="fas fa-bars"></i>
          </div>
          <!-- NAVIGATION -->
          <ul class="nav-ul">
            <i class="fas fa-times close"></i>
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="" class="nav-link">Services</a></li>
            <li><a href="" class="nav-link">About</a></li>
            <li><a href="" class="nav-link current">Contact</a></li>
            <li><a href="" class="nav-link">Blog</a></li>
          </ul>
          <i class="fas fa-search search"></i>
        </nav>
      </div>
    </header>

    <section class="my-5">
   <div class=py-5>
      <h2 class="text-center">Our Gallery</h2> 
   </div>

   <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
         <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" width:"80%" height:30px auto-complete="off" class="form-control">    
         </div>  
         <div class="form-group">
            <label>Email Id</label>
            <input type="email" name="email" auto-complete="off" class="form-control">    
         </div>  
         <div class="form-group">
            <label>Mobile</label>
            <input type="number" name="mobile" auto-complete="off" class="form-control">    
         </div>  
         <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comments"></textarea>  
         </div>  
         <button type="submit" class=" btn-success">Submit</button>
      </form>
   </div>
</section>   

<section id="contact">
        <div class="container">
          <div class="contact">
            <!-- icons -->
            <div class="contact-icon">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-github"></i>
            </div>
            <!-- text -->
            <h2>Let's Talk?</h2>

            <!-- button -->
            <a href="#" class="btn btn-dark">Make an enquiry!</a>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="container">
        <p>2021 &copy; VeraIkhalo. All Rights Reserved</p>
      </div>
    </footer>








    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="script.js"></script>
  </body>
</html>
