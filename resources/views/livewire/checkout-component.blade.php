@section('title')
Замовлення 
@endsection
	
	<main id="main" class="main-site">
		
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Checkout</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<form>
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-address-billing">
							<h3 class="box-title">Billing Address 1 </h3>
							<div class="billing-addres">
								<p class="row-in-form">
									<label for="fname">first name<span>*</span></label>
									<input id="fname" type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
								</p>
								<p class="row-in-form">
									<label for="lname">last name<span>*</span></label>
									<input id="lname" type="text" name="lname" value="" placeholder="Your last name"  wire:model="lastname">
								</p>
								<p class="row-in-form">
									<label for="email">Email Addreess:</label>
									<input id="email" type="email" name="email" value="" placeholder="Type your email" wire:model="email">
								</p>
								<p class="row-in-form">
									<label for="phone">Phone number<span>*</span></label>
									<input id="phone" type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
								</p>
								<p class="row-in-form">
									<label for="zip-code">Postcode / ZIP:</label>
									<input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
								</p>
								<p class="row-in-form">
									<label for="country">Country<span>*</span></label>
									<input id="country" type="text" name="country" value="" placeholder="United States" wire:model="country">
								</p>

								<p class="row-in-form">
									<label for="province">Province<span>*</span></label>
									<input id="province" type="text" name="province" value="" placeholder="Lvivska" wire:model="province">
								</p>
								
								<p class="row-in-form">
									<label for="city">Town / City<span>*</span></label>
									<input id="city" type="text" name="city" value="" placeholder="City name" wire:model="city">
								</p>
								<p class="row-in-form">
									<label for="line1">Address1:<span>*</span></label>
									<input id="line1" type="text" name="line1" value="" placeholder="Street at apartment number" wire:model="line1">
								</p>
								<p class="row-in-form">
									<label for="line2">Address2:</label>
									<input id="line2" type="text" name="line2" value="" placeholder="Street at apartment number" wire:model="line2">
								</p>
								<p class="row-in-form fill-wife">
									<label class="checkbox-field">
										<input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_tp_different">
										<span>Ship to a different address?</span>
									</label>
								</p>
							</div>
						</div>
					</div>
					@if($ship_tp_different)
						<div class="col-md-12">
							<div class="wrap-address-billing">
								<h3 class="box-title">Billing Address 2</h3>
								<div class="billing-addres">
									<p class="row-in-form">
										<label for="fname">first name<span>*</span></label>
										<input id="fname" type="text" name="fname" value="" placeholder="Your name">
									</p>
									<p class="row-in-form">
										<label for="lname">last name<span>*</span></label>
										<input id="lname" type="text" name="lname" value="" placeholder="Your last name">
									</p>
									<p class="row-in-form">
										<label for="email">Email Addreess:</label>
										<input id="email" type="email" name="email" value="" placeholder="Type your email">
									</p>
									<p class="row-in-form">
										<label for="phone">Phone number<span>*</span></label>
										<input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
									</p>
									<p class="row-in-form">
										<label for="zip-code">Postcode / ZIP:</label>
										<input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
									</p>
									<p class="row-in-form">
										<label for="country">Country<span>*</span></label>
										<input id="country" type="text" name="country" value="" placeholder="United States">
									</p>
									
									<p class="row-in-form">
										<label for="city">Town / City<span>*</span></label>
										<input id="city" type="text" name="city" value="" placeholder="City name">
									</p>
									<p class="row-in-form">
										<label for="add">Address:</label>
										<input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
									</p>
								</div>
							</div>
						</div>
					@endif
				</div>
				
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Payment Method</h4>
						<p class="summary-info"><span class="title">Check / Money order</span></p>
						<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="code" type="radio">
								<span>Direct Bank Transder</span>
								<span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="card" type="radio">
								<span>visa</span>
								<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="cash" type="radio">
								<span>Cash</span>
								<span class="payment-desc">You can pay with your credit</span>
								<span class="payment-desc">card if you don't have a paypal account</span>
							</label>
						</div>
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$0.00</span></p>
						<a href="thankyou.html" class="btn btn-medium">Place order now</a>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box f-title">Shipping method</h4>
						<p class="summary-info"><span class="title">Flat Rate</span></p>
						<p class="summary-info"><span class="title">Fixed $0.00</span></p>

					</div>
				</div>
				</form>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>