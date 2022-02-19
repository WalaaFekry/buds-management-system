<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buds Admin - Log in</title>
  
	<!-- Vendors Style--> 
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">	

</head>
<body class="bg-body">	

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
                            <!--begin::Logo-->
                            <a href="" class="mb-12">
                                <img alt="Logo" src="{{ ('assets/media/logos/logo-2.svg') }}" class="h-40px" />
                            </a>
                            <!--end::Logo-->					
						</div>
						<div class="p-30 rounded20 box-shadowed b-2 b-dashed">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h3 class="text-dark mb-3">Sign In to Buds Admin</h3>
                            <!--end::Title-->
                            </div>

                                <div class="form-group">
                                    <label for="email" value="{{ __('Email') }}" class="form-label fs-6 fw-bolder text-dark">Email</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-dark"><i class="ti-email"></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control pl-15 bg-transparent text-dark plc-dark" placeholder="Email" name="email" :value="old('email')" required autofocus />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" value="{{ __('Password') }}" class="form-label fs-6 fw-bolder text-dark">Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent text-dark"><i class="ti-lock"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control pl-15 bg-transparent dark-white plc-dark" placeholder="Password" name="password" required autocomplete="current-password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox" name="remember" id="remember_me" >
                                        <label for="remember_me">{{ __('Remember me') }}</label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="form-group">
                                  @if (Route::has('password.request'))
									 <div class="fog-pwd text-right">
										<a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 hover:text-gray-900">{{ __('Forgot your password?') }}</a>
									  </div>
                                  @endif
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-rounded mt-10">{{ __('Log in') }}</button>
                                </div>
							</form>		
							<div class="text-center">
								<p class="mt-15 mb-0 text-dark">New Here? <a href="{{ route('register') }}" class="text-primary ml-5">Create an Account</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>	

</body>
</html>
