

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/loginpage.css">


<script
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="icon" href="http://example.com/favicon.png">
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">



  </head>

  <body style="background-image: url('img/header.jpg');">

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><i>Saundrya Beauty Care</i></a>
       


       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">

              <a class="nav-link js-scroll-trigger   " href="HTML/about.html"> <font  color="white">About</font></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownlist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font  color="white">Services</font>
                
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item " href="">Simple</a>
                <a class="dropdown-item" href="">Makeup</a>
                <a class="dropdown-item" href="">Bridal</a>
                <a class="dropdown-item" href="">Body Care</a>
                <a class="dropdown-item" href="">Example</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio"><font  color="white">Portfolio</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="HTML/contact.html"><font  color="white">Contact</font></a>
            </li>


           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownlist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font  color="white">Other</font>
                
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="./feedback.html">Feedback</a>
                <a class="dropdown-item" href="../LoginPage.php">Login</a>
                <a class="dropdown-item" href="HTML/contact.html">Contact Us</a>
                <a class="dropdown-item" href=""></a>
                <a class="dropdown-item" href=""></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header >

        
    </header>


 <div class="container " id="signinbox">
       <div class="card card-container  " id="regbox">
          
          
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="img/log.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <form class="form-signin" method="post" action="php/registeruser.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text"  class="form-control" placeholder="User Name" name="uname" required autofocus>
                <input type="email"  class="form-control" placeholder="User Email" name="uemail" required autofocus>
                <input type="password"  class="form-control" placeholder="Password" name="upass" required>
                 <input type="password"  class="form-control" placeholder="Confirm Password" name="cupass" required>

                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="register">SIGN UP</button>
            </form><!-- /form -->
            <p>
                Already Register..?<a href="LoginPage.php"  class="forgot-password"> Sign in.
            </a>
        </p>
        </div><!-- /card-container -->

  </div><!-- /container -->

        
    <!-- /.row -->


<?php

/*
<script>
function login() {
    if (document.getElementById("signinbox")) {
        document.getElementById("regbox").style.display="block";
    } else {
        document.getElementById("signinbox").style.display="none";
    }
}

function reg() {
    if (document.getElementById("regbox")) {
       //document.getElementById("signinbox").style.display="block";
    } else {
        document.getElementById("regbox").style.display="none";
    }
}

</script>  

*/
?>

 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>





