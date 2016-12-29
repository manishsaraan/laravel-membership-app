@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
                 <div class="card auth-card">
                 <h1>Login Here</h1>
                 	<form method="post" action="/login">
                 	{!! csrf_field() !!}
                                   <!-- Email -->
                           <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                           </div>

                                   <!-- passwod -->
                           <div class="form-group">
                                 <label>Password</label>
                                 <input type="password" name="password" class="form-control">
                           </div>

                                   <!-- login button -->

                           <div class="form-group">
                               <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                           </div>
                 	</form>
                 </div>
		</div>
	</div>
</div>
@endsection