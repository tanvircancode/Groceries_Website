<?php

session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">

<!-- Title is here -->
	<title>UX Project</title>
	<!-- Font awesome css -->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css"/>
	<!-- Bootstrap Css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    
</head>
	<body>
         <div class="container">
    <a class="float-right" href="logout.php"> LOGOUT </a>
    <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>  
    </div>
      
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_content">
                            <h1>Groceries delivered in 1 hour</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <section class="discount_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="discount_img">
                            <img src="images/save.png" class="img-fluid" alt="save image"/>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="discount_img">
                            <img src="images/enter.png" class="img-fluid" alt="save image"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="product_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product_heading">
                            <h2>Our Product Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/fresh-fruits--vegetables/cid-CU00336648.aspx">
                        <div class="product_item">
                            
                           <span class="product_content">Fruits and Vegetables</span>
                            <span class="icons"><i class="fab fa-apple" ></i></span>
                      
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/meat--fish/cid-CU00336654.aspx">
                        <div class="product_item">
                           <span class="product_content">Meat and Fish</span>
                            <span class="icons"><i class="fas fa-paw"></i></span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/meat--fish/cid-CU00336654.aspx">
                        <div class="product_item">
                           <span class="product_content">Cooking</span>
                            <span class="icons"><i class="fas fa-coffee"></i></span>
                        </div>
                      </a>
                    </div>
                
                  
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/drinks/cid-CU00336782.aspx">
                        <div class="product_item">
                           <span class="product_content">Beverages</span>
                            <span class="icons"><i class="fas fa-glass-martini"></i></span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      <a  style="text-decoration: none" href="https://www.shwapno.com/categories/home-care--cleaning/cid-CU00336842.aspx">
                        <div class="product_item">
                           <span class="product_content">Home and Cleaning</span>
                            <span class="icons"><i class="fas fa-paw"></i></span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/spreads/cid-CU00336802.aspx">
                        <div class="product_item">
                           <span class="product_content">Spreads</span>
                            <span class="icons"><i class="fas fa-paw"></i></span>
                        </div>
                      </a>
                    </div>
                
        
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/bags/cid-CU00369602.aspx">
                        <div class="product_item">
                           <span class="product_content">Bags</span>
                            <span class="icons"><i class="fas fa-briefcase"></i></span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/lifestyle-women/cid-CU00353870.aspx">
                        <div class="product_item">
                           <span class="product_content">Beauty Products</span>
                            <span class="icons"><i class="fas fa-flask"></i></span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href=https://www.shwapno.com/categories/personal-care/cid-CU00336824.aspx">
                        <div class="product_item">
                           <span class="product_content">Health Products</span>
                            <span class="icons"><i class="fas fa-paw"></i></span>
                        </div>
                      </a>
                      
                    </div>
                
               
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/pet-care/cid-CU00336850.aspx">
                        <div class="product_item">
                           <span class="product_content">Pet Care</span>
                            <span class="icons"><i class="fas fa-paw"></i></span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      <a  style="text-decoration: none"href="https://www.shwapno.com/categories/home-care--cleaning/cid-CU00336842.aspx">
                        <div class="product_item">
                           <span class="product_content">Home Appilances</span>
                            <span class="icons"><i class="fas fa-paw"></i></span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-4">
                      
                      <a style="text-decoration: none" href="https://www.shwapno.com/categories/baby-food--care/cid-CU00336814.aspx">
                        <div class="product_item">
                           <span class="product_content">Baby Care</span>
                            <span class="icons"><i class="fas fa-child"></i></span>
                        </div>
                      </a>
                    
                    </div>
                </div>
            </div>
        </section>
       

        <section class="order_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="order_heading">
                            <h4 class="kext">How to Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="image_slider">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" class="e" src="images/uber.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  class="e" src="images/gt.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" class="e" src="images/easyp.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<h4 class="uy">SPECIAL OFFER</h4> 


<div class="container">
 <div class="sld">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner">

<div class="item active">
        <img src="i/lexus.jpg" alt="htd" style="width:100%;">
        </div>
<div class="item">
        <img src="i/rice.jpg" alt="yy" style="width:100%;">
      </div>
      
      
     
    
      <div class="item">
        <img src="i/atta.jpg" alt="New York" style="width:100%;">
        
      </div>
       <div class="item">
        <img src="i/hrp.jpg" alt="Chicago" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="i/elish.jpg" alt="sda" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="i/ck.jpg" alt="kh" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="i/kik.jpg" alt="popo" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="i/bsh.jpg" alt="mh" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="i/fresh.jpg" alt="mh" style="width:100%;">
        
      </div>
  
    </div>

  </div>
</div>
</div>

<footer class="footer_section">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              <p>&copy; Tanvir Ahmed Chy 2018</p>
            </div>
          </div>
        </div>
        </div>
      
  </footer>
  


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
