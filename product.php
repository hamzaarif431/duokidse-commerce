<?php
    include 'includes/header.php';
    $page = 'home';
?>

<section class="product--sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                <div class="product--img">
                    <div id="img-zoomer-box">
                    <img src="images/f7.jpeg" id="img1" />
                    <div id="img2"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                <div class="product--text">
                    <div class="product--breadcrumb">   
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">BABY BOYS</a></li>
                            <li class="breadcrumb-item active"><a href="#">Dinasour shorts</a> </li>
                        </ol>
                        </nav>
                    </div>
                    <div class="product--entry--text">
                        <h1>Dinasour shorts</h1>
                        <h3>$18</h3>
                        <p>
                        Scelerisque facilisi rhoncus non faucibus parturient senectus lobortis a ullamcorper vestibulum mi nibh ultricies a parturient gravida a vestibulum leo sem in. Est cum torquent mi in scelerisque leo aptent per at vitae ante eleifend mollis adipiscing.
                        </p>
                        <div class="product--increment">
                            <div class="control">
                            <button class="bttn bttn-left" id="minus">
                            <span>-</span>
                            </button>
                            <input type="number" class="input" id="input">
                            <button class="bttn bttn-right" id="plus">
                            <span>+</span>
                            </button>
                            
                            </div>
                        </div>
                        <div class="product--cart">
                            <button>ADD TO CART</button>
                        </div>
                        <div class="product--icon">
                            <ul>
                                <li>
                                <i class="fas fa-random"></i> <span>Compare</span> 
                                </li>
                                <li>
                                <i class="far fa-heart"></i> <span>Add to wishlist</span> 
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="product--icon--2">
                            <ul>
                                <li>Category : <span> BABY BOYS</span> </li>
                            </ul>
                            <ul>
                                <li>Share : </li>
                                <li><i class="fab fa-facebook"></i></li>
                                <li><i class="fab fa-twitter"></i></li>
                                <li><i class="fab fa-pinterest"></i></li>
                                <li><i class="fab fa-linkedin"></i></li>
                                <li><i class="fab fa-telegram"></i></li>
                            </ul>
                        </div>

                    </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <section class="product--tab">
        <div class="container">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ADDITIONAL INFORMATION</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">REVIEWS (0)</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">ABOUT BRAND</button>
                            <button class="nav-link" id="nav-contact-tab1" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">SHIPPING & DELIVERY</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="tab--1-c">
                                <h1>Brand</h1>
                                <h1>KLÖBER</h1>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="tab--2-c">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 col-xxl-4">
                                        <div class="tab--2--t">
                                            <h1>REVIEWS <br>
                                            There are no reviews yet.</h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2 col-xxl-2">
                                        </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                        <div class="tab--form">
                                            <h3>BE THE FIRST TO REVIEW “DINASOUR SHORTS”</h3>
                                            <h4>Your email address will not be published. Required fields are marked <span>*</span> </h4>
                                            <ul>
                                                <li>Your rating <span>*</span> :</li>
                                                <li><i class="fal fa-star"></i></li>
                                                <li><i class="fal fa-star"></i></li>
                                                <li><i class="fal fa-star"></i></li>
                                                <li><i class="fal fa-star"></i></li>
                                                <li><i class="fal fa-star"></i></li>
                                            </ul>
                                            <form>
                                                <h5>Your review <span>*</span></h5>
                                                <textarea name="" id="" cols="80" rows="5"></textarea>
                                                <div class="tab--form--input">
                                                    <label>Name <span>*</span> </label>
                                                    <input type="text">
                                                    <label>Email <span>*</span> </label>
                                                    <input type="text">
                                                    <label>
                                                        <input type="checkbox">
                                                        Save my name, email, and website in this browser for the next time I comment.
                                                    </label>
                                                    <br>
                                                    <button>Submit</button>
                                                </div>
                                            </form>
                                        </div>
            
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="tab--c--3">
                                            <div class="row">
                                                    <div class="col-sm-5 col-md-5 col-lg-5 col-xxl-5">
                                                        <div class="tab--c--text">
                                                            <h1>ALESSI</h1>
                                                            <p>
                                                            Parturient ut id tellus vulputatre ac ultrlices a part ouriesnt sapien dignissim partu rient a a inter drum vehicula. Ornare metus laoreet tincidunt eros rolem tristique pretium malada.
                                                            </p>
                                                            <hr>
                                                            <p>
                                                            Cras rhoncus vivamus luctus platea arcu laoreet selm. Curae est condenectus sed hac a parturient vestibulum.
                                                            </p>
                                                            <a href="#">MORE PRODUCTS</a>

                                                        </div>                                                       
                                                    </div>
                                                    <div class="col-sm-7 col-md-7 col-lg-7 col-xxl-7">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xxl-4">  
                                                                <div class="tab-3-card">
                                                                    <div class="card f-card">
                                                                        <div class="f-img">
                                                                            <a href="#" class="f-a">
                                                                                <img src="images/f2.jpeg" class="f-thumb">
                                                                            </a>
                                                                            <div class="right-icons">
                                                                                <ul class="icons-ul">
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-random"></i></a>
                                                                                    </li>
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-search"></i></a>
                                                                                    </li>
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-heart"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="add-cart">
                                                                                <a href="#" class="car--a">
                                                                                    <!-- <span class="cart-text">add to cart</span> -->
                                                                                    <button>Add to Cart</button>
                                                                                    <!-- <i class="fal fa-shopping-cart cart-icon"></i> -->
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="f-desc">
                                                                            <a href="#" class="f-name">BABY PINK</a>
                                                                            <span class="f-price">$20</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xxl-4">  
                                                                <div class="tab-3-card">
                                                                    <div class="card f-card">
                                                                        <div class="f-img">
                                                                            <a href="#" class="f-a">
                                                                                <img src="images/f3.jpeg" class="f-thumb">
                                                                            </a>
                                                                            <div class="right-icons">
                                                                                <ul class="icons-ul">
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-random"></i></a>
                                                                                    </li>
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-search"></i></a>
                                                                                    </li>
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-heart"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="add-cart">
                                                                                <a href="#" class="car--a">
                                                                                    <!-- <span class="cart-text">add to cart</span> -->
                                                                                    <button>Add to Cart</button>
                                                                                    <!-- <i class="fal fa-shopping-cart cart-icon"></i> -->
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="f-desc">
                                                                            <a href="#" class="f-name">BABY SHARK</a>
                                                                            <span class="f-price">$16</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xxl-4">  
                                                                <div class="tab-3-card">
                                                                    <div class="card f-card">
                                                                        <div class="f-img">
                                                                            <a href="#" class="f-a">
                                                                                <img src="images/f4.jpeg" class="f-thumb">
                                                                            </a>
                                                                            <div class="right-icons">
                                                                                <ul class="icons-ul">
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-random"></i></a>
                                                                                    </li>
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-search"></i></a>
                                                                                    </li>
                                                                                    <li class="icon-li"><a class="icon-a" href="#"><i class="far fa-heart"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="add-cart">
                                                                                <a href="#" class="car--a">
                                                                                    <!-- <span class="cart-text">add to cart</span> -->
                                                                                    <button>Add to Cart</button>
                                                                                    <!-- <i class="fal fa-shopping-cart cart-icon"></i> -->
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="f-desc">
                                                                            <a href="#" class="f-name">BUNNY DRESS</a>
                                                                            <span class="f-price">$20</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                        </div>


                        <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
                        <div class="tab--c--4">
                                            <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">  
                                                            <img src="images/tab--1.jpg" class="img-fluid">

                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">  
                                                            <img src="images/tab--1.jpg" class="img-fluid">
                                                            </div>
                                                        
                                                        

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                                        <div class="tab--c--text">
                                                            <h1>MAECENAS IACULIS</h1>
                                                            <p>
                                                            Vestibulum curae torquent diam diam commodo parturient penatibus nunc dui adipiscing convallis bulum parturient suspendisse parturient a.Parturient in parturient scelerisque nibh lectus quam a natoque adipiscing a vestibulum hendrerit et pharetra fames nunc natoque dui.
                                                            </p>

                                                            <h1>ADIPISCING CONVALLIS BULUM</h1>
                                                        <ul class="tab--4--ul">
                                                        <li><i class="fa fa-angle-right"></i> Vestibulum penatibus nunc dui adipiscing convallis bulum parturient suspendisse.</li>
                                                        <li><i class="fa fa-angle-right"></i> Vestibulum penatibus nunc dui adipiscing convallis bulum parturient suspendisse.</li>
                                                        <li><i class="fa fa-angle-right"></i> Vestibulum penatibus nunc dui adipiscing convallis bulum parturient suspendisse.</li>
                                                        </ul>
                                                        <p>
                                                        Scelerisque adipiscing bibendum sem vestibulum et in a a a purus lectus faucibus lobortis tincidunt purus lectus nisl class eros.Condimentum a et ullamcorper dictumst mus et tristique elementum nam inceptos hac parturient scelerisque vestibulum amet elit ut volutpat.
                                                        </p>
                                                        

                                                        </div>                                                       
                                                    </div>
                                                    
                                            </div>
                                    </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

<hr>


</section>


<section class="product--slider">
    <section class="sec-collection">
            <div class="container">
                <!-- <h6 class="c-shead">Our Latest Collection</h6> -->
                <!-- <h3 class="c-head">New in Store</h3> -->
                <!-- <p class="c-para">Check our newest collection of fresh and trendy party wear outfits for kids.</p> -->
                <h1 class="product-head">RELATED PRODUCTS</h1>
                
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="collection-slider owl-carousel owl-theme" id="collection-slider">
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f1.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f2.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f3.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f4.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f5.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f6.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f7.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card f-card">
                                    <div class="f-img">
                                        <a href="#" class="f-a">
                                            <img src="images/f8.jpeg" class="f-thumb">
                                        </a>
                                        <div class="right-icons">
                                            <ul class="icons-ul">
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-random"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-search"></i></a>
                                                </li>
                                                <li class="icon-li"><a class="icon-a" href="#"><i
                                                            class="far fa-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="add-cart add--cart">
                                            <a href="#" class="car-a">
                                                <span class="cart-text">add to cart</span>
                                                <i class="fal fa-random cart-icon fa--shuffle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="f-desc">
                                        <a href="#" class="f-name">English Casual Short</a>
                                        <span class="f-price">$50</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>



<?php
    include 'includes/footer.php';
    $page = 'home';
?>