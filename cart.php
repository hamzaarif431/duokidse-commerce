<?php
    include 'includes/header.php';
    $page = 'home';
?>  
<main>

<section class="cart-main-content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
				<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">PRODUCT</th>
      <th scope="col">PRICE</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">SUB TOTAL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<td><i class="fas fa-times"></i></td>
      <td><img src="images/wish.jpeg" class="img-fluid" alt="img"></td>
      <td>
        <h2>Baby Shark</h2>
        
      </td>
      <td>$16</td>

      <td>
        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn  btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1" disabled="">
                                <div class="input-group-prepend2">
                                    <button class="btn  btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
      </td>
      <td>$16</td>

    </tr>
  </tbody>
</table>
<div class="button-section">
<div class="row">
	<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
		<div class="form-section">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
					<input type="text" name="coupon" placeholder="Coupon code">
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
					<div class="apply-coupon">
						<a href="">Apply coupon</a>
					</div>
				</div>

			</div>
		</div>
	</div>
			<div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
				<div class="addtocartbutton">
					<a href="">Update cart</a>
				</div>
			</div>

</div>	
</div>

			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
				<div class="card-for-cart">
					<div class="card">
						<div class="card-body">
								<h2>Cart totals</h2>
								<div class="subtotal">
									<ul>
										<li>Subtotal</li>
										<li>$16</li>
									</ul>
								</div>
								<div class="clearfix"></div>
								<hr>
								<div class="total">
									<ul>
										<li>Total</li>
										<li>$16</li>
									</ul>
								</div>
								<div class="clearfix"></div>
								<div class="proceed-to-checkout-button">
									<a href="">Proceed To Checkout</a>
								</div>
						</div>
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