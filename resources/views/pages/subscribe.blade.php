@extends('layouts.app')

@section('content')
<div class="hero">
	<div class="hero-content">
             <h1>You Are Joining!!!</h1>
             <h2>Hooray!</h2>
	</div>
</div>
<section>
<div class="container">
	<div class="card card-padded">
		<!-- User Information -->
      @if(Auth::guest())
		<div class="section-header">
			<h2>
				User Information
			</h2>
		</div>
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name"	class="form-control">
        </div>

        <div class="form-group">
        <label>Email</label>
        <input type="email" name="email"	class="form-control">
        </div>

        <div class="form-group">
        <label>Password</label>
        <input type="password" name="password"	class="form-control">
        </div>
        @endif
		<!-- Subscription Info -->

		<div class="section-header">
			<h2>
			  Subscription Information
			</h2>
		</div>
         <div class="form-group">
                   <div class="row">
                   	<div class="col-xs-4">
                   		<div class="subscription-option">
                                 <input type="radio" id="plan-bronze" name="plan" value="bronze" checked>
                                 <label for="plan-bronze">
                                   <span class="plan-price">$5<small>/mo</small></span>
                                   <span class="plan-name">Bronze</span>
                                 </label>
                   		</div>
                   	</div>
                   	<div class="col-xs-4">
                   		<div class="subscription-option">
                                 <input type="radio" id="plan-silver" name="plan" value="silver" >
                                 <label for="plan-silver">
                                   <span class="plan-price">$10<small>/mo</small></span>
                                   <span class="plan-name">Silver</span>
                                 </label>
                   		</div>

                   	</div>
                   	<div class="col-xs-4">
                   		<div class="subscription-option">
                                 <input type="radio" id="plan-gold" name="plan" value="gold" >
                                 <label for="plan-gold">
                                   <span class="plan-price">$15<small>/mo</small></span>
                                   <span class="plan-name">Gold</span>
                                 </label>
                   		</div>
                   	</div>
                   </div>
         </div>

		<!-- Credit Card Info -->
		<div class="section-header">
			<h2>
				Credit Card Information
			</h2>
		</div>
                  <!-- credit card no -->

                    <div class="form-group row">
                         <div class="col-xs-8">
                         	<label>Credit Card Number</label>
                         	<input type="text" class="form-control" name="" placeholder="4242 4242 4242 4242">
                         </div>
                          <!-- cvc no -->
                         <div class="col-xs-4">
                         	<label>CVC</label>
                         	<input type="text" class="form-control" name="" placeholder="123">
                         </div>
                    </div>
                   <div class="form-group row">
                      <!-- expiration month -->
                            <div class="col-xs-3">
								<label>Expiration Month</label>
								<input type="text" class="form-control" name="" placeholder="10">
                            </div>
                      <!-- expiration  year -->
                            <div class="col-xs-3">
								<label>Expiration Year</label>
								<input type="text" class="form-control" name="" placeholder="2020">
                            </div>
                   </div>
                   <!-- submit button -->
                   <div class="form-group text-center">
                            <button type="submit" class="btn btn-lg btn-success btn-block">Join</button>
                   </div>





	</div>
</div>
</section>
@endsection