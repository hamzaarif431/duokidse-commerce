<?php
    include 'includes/header.php';
    $page = 'home';
?>
<!-- Muhammad Bilal Rizwann -->
<section class="banner--ban">
    <div class="banner--sec">
        <div class="banner-text">
            <h1>Create An Account</h1>
        </div>
    </div>
</section>
<section class="create-account-form">
    <div class="container">
        <div class="row">
            <div class="col-2 col-md-2 col-lg-2 col-sm-2 col-xl-2 col-xxl-2"></div>
            <div class="col-8 col-md-8 col-lg-8 col-sm-8 col-xl-8 col-xxl-8">
                <form>
                    <div class="row">
                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-input-class">
                                <label>First Name</label>
                                <input type="text" name="text" class="custom-input" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="form-input-class">
                                <label>Last Name</label>
                                <input type="text" name="text" class="custom-input" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-input-class">
                            <label>Email</label>
                                <input type="Email" name="Email" class="custom-input" placeholder="Email">
                            </div>
                    <div class="form-input-class">
                        <label>Password</label>
                        <input type="password" name="password" class="custom-input" placeholder="Password">
                    </div>
                    <div class="form-input-class">
                        <label>Confirm Password</label>
                        <input type="password" name="password" class="custom-input" placeholder="Confirm Password">
                    </div>
                    <button>Create Account</button>
                </form>
            </div>
            <div class="col-2 col-md-2 col-lg-2 col-sm-2 col-xl-2 col-xxl-2"></div>

        </div>
    </div>
</section>
<?php
    include 'includes/footer.php';
    $page = 'home';
?>