<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="icon" href="images/fav-icon.png" type="image/png" sizes="">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active-a" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">about us</a>
                        </li>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle nav-link" href="products.php" role="button" id="dropdownMenuLink"
                                aria-expanded="false">
                                products
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="product-list.php">baby boys</a></li>
                                <li><a class="dropdown-item" href="product-list.php">baby girls</a></li>
                                <li><a class="dropdown-item" href="product-list.php">shoes</a></li>
                                <li><a class="dropdown-item" href="product-list.php">croessbody bags</a></li>
                                <li><a class="dropdown-item" href="product-list.php">accessories</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">contact us</a>
                        </li>
                    </ul>
                </div>

                <div class="icon-btn-main">
                    <button class="sidebar-toggle signin-toggles"><i class="fal fa-user"></i></button>
                    <a href="#search" class="sidebar-toggle"><i class="far fa-search"></i></a>
                    <a href="wishlist-empty.php" class="sidebar-toggle"><i class="fal fa-heart"></i><span class="red-icon">0</span></a>
                    <button class="sidebar-toggle shopping-toggle"><i class="fal fa-shopping-bag"></i><span class="red-icon">0</span></button>
                </div>
            </div>
        </nav>

        <!-- shopping cart -->
        <aside class="sidebar">
          <div class="sidebar-header">
            <p class="shopping-cart-txt">shopping cart</p>
            <button class="close-btn"><i class="fas fa-times"></i></button>
          </div>
          <!-- links -->
          <div class="addtocart-shopingcart">
            <div class="card side-shopping-cart">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
              <img src="images/slider-01.jpg" class="img-fluid" alt="img">
            </div>
            <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
              <h3>Baby Shark</h3>
              <ul><li>2</li><li>x</li><li>$16</li></ul>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
              <div class="crossicon">
                <i class="fal fa-times"></i>
              </div>
            </div> 

</div>
          </div>  
          </div>
          <div class="total-section-cart">
          <hr>  
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
              <ul><li>Subtotal:</li><li>$32</li></ul>
              <div class="clearfix"></div>
              <div class="cartbutton-shoppingcart">
                <a href="#">View cart</a>
              </div>
              <div class="checkoutbutton-shoppingcart">
                <a href="#">Checkout</a>
              </div>
            </div>
          </div>
          </div>
            
          
          <!-- <ul class="menu-item">
            <li class="menu-item-li text-center"><i class="fal fa-shopping-cart cart-basket"></i></li>
            <li class="menu-item-li text-center"><span class="no-pdct">no products in the cart</span></li>
            <li class="menu-item-li text-center"><a class="btn rtn-shop" href="#">return to shop</a></li>
          </ul> -->
          <!-- social media -->
          <!-- <ul class="navbar-btn-main">
            <li>
              <a href="#" class="submit-btn">contact us</a>
            </li>
            <li>
              <a href="#" class="submit-btn">Submit Add</a>
            </li>
            <li>
              <a href="#" class="submit-btn">FAQS</a>
            </li>
          </ul>

          <ul class="social-icons">
            <li>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul> -->
        </aside>


        <!-- User Sign  -->

         <!-- shopping cart  -->
        <aside class="sidebar--signin">
          <div class="sidebar-header">
            <p class="shopping-cart-txt">SIGN IN</p>
            <button class="close-btns"><i class="fas fa-times"></i></button>
          </div>
          <!-- links -->
          <div class="user--sign-in">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username or email <span>*</span> </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <br>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password <span>*</span> </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <br>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label s--1" for="exampleCheck1">Remember me</label>
                <label class="form-check-label" for="exampleCheck1">Lost your password?</label>

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="sign--icon text-center mt-5">
              <i class="fa fa-user"></i>
              <p>No account yet?</p>
              <a href="create-an-account.php">CREATE AN ACCOUNT</a>
            </div>
          </div>
        </aside>

        <div id="search">
    <button type="button" class="close"> ×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-search-items">Search</button>
    </form>
</div>

    </header>