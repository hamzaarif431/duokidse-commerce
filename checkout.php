<?php
    include 'includes/header.php';
    $page = 'home';
?>
<main>
    <section class="sec-checkout">
        <div class="container">
            <h6 class="coupon">Have a coupon? <a href="#" class="coupon-a">Click here to enter your code</a></h6>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <form class="personal-info-main">
                        <h5 class="label-head">BILLING DETAILS</h5>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="" class="per-label">first name<abbr>*</abbr></label>
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                <label for="" class="per-label">last name<abbr>*</abbr></label>
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="per-label">Company name<abbr> (optional)</abbr></label>
                                <input type="email" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="per-label">Country / Region<abbr>*</abbr></label>
                                <input type="tel" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="per-label">Street address<abbr>*</abbr></label>
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="per-label">Postcode / ZIP<abbr>*</abbr></label>
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="per-label">Town / City<abbr>*</abbr></label>
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="per-label">Phone<abbr>*</abbr></label>
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label for="" class="per-label">Email address<abbr>*</abbr></label>
                                <input type="text" class="form-control personal-info-control" placeholder="">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <h5 class="label-head">Additional information</h5>
                                <label for="" class="per-label">Order notes<abbr>(optional)</abbr></label>
                                <textarea name="" id="" rows="10" class="personal-info-control-area"
                                    placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="check-box-main">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label class="check-box" for="vehicle1">Yes, I'm ok with you sending me additional
                                        newsletter and email content</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="total-main">
                        <h6 class="head-order">your order</h6>
                        <div class="card-bg">
                            <div class="row justify-content-between mb-3">
                                <div class="col-6">
                                    <h6 class="service-name">Product</h6>
                                </div>
                                <div class="col-3">
                                    <h6 class="service-total">Subtotal</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between mb-3">
                                <div class="col-6">
                                    <h6 class="service-name">Dinasour shorts × 1</h6>
                                </div>
                                <div class="col-3">
                                    <h6 class="service-total">$18</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between mb-3">
                                <div class="col-6">
                                    <h6 class="service-name">Subtotal</h6>
                                </div>
                                <div class="col-3">
                                    <h6 class="service-total">$18</h6>
                                </div>
                            </div>

                            <hr class="price-d">
                            <div class="total-price-main">
                                <div class="row justify-content-between mb-3">
                                    <div class="col-6">
                                        <h6 class="total-cost">Total</h6>
                                    </div>
                                    <div class="col-5">
                                        <h6 class="total-price">$18</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="btn-main">
                            <button type="submit" class="btn order-btn">place order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>