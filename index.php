<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <title>ISTAIX</title>
    <style>
        body{
            background-color: grey;
            background-image: url('img5.webp');
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      color: #ffffff;

        }
        .first {
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: white;

        }

      

        .navbar {
            background-color: #263640;
            font-weight: bolder;
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
        }

        .nav-link {
            color: aliceblue;
            font-weight: bolder;


        }

        a:hover {
            color: blue;
        }

        li {
            list-style: none;
        }

        .background-image {
            background-image: url('index.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 700px;
            position: relative;
        }

        h1 {
            font-size: 60px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            padding-top: 100px;
            padding-left: 100px
        }

        p {
            width: 520px;
            height: 250px;
            font-size: px;
            font-family:Arial, Helvetica, sans-serif;
            font-weight: bold;
            padding-left: 100px;
            color: rgb(84, 82, 82);
            padding-top: 20px;
        }
        .footer{
            display: flex;
        }
        .icons{
            margin: 74px 0px 0px 94px;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <ul class="navbar-brand   ">
                        <li class="nav-item"><img src="companyicon.png" alt=""> <span class="first">ISTAIX</span>  </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" >Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="aboutus.php" target="_blank" >AboutUs</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="products.php" target="_blank" >Products</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php" target="_blank"  >Login/SignUp</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="feedback.php" target="_blank"  >feedback</a>
                </li>
                <li><button class="btn btn-secondary btn-lg" style="margin-left: 200px;">Get Started</button></li>
            </ul>
        </div>
    </nav>
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
      
    <section>
        <div class="background-image">

            <div class="content">
                <h1>YOU TRUST <br> WE PROVIDE</h1>
                <p>We designed 100+ commercial and resdential projects <br>in UAS and across the globe.Providing design and 3D support to architecture firms Globally. Award Winning Company. <b>17+ Years</b> Of Experience.  </p>
            </div>
            <button
                    style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-left: 100px; background-color: #263640; color: white;"
                    class="btn  btn-lg "> See Our Work</button> 
        </div>
        <div class="footer">
            <div>
            <h1>Our a Decade Of <br> Achievements</h1>
            <p>With our super powers we have reached this.</p>
        </div>
        <div class="icons">
            <img src="icons.png" alt="">
        </div>
        </div>
       <center> <div>
           <h1 style=" font-size: 30px; margin-top: -210px;"> Our Trusted Clients.</h1>
        </div></center>
        <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color: blue; font-weight:bolder; font-size:30px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: blue; font-weight:bolder; font-size:30px;">logout</a> </p>
    <?php endif ?>


    </section>

</body>

</html>