<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buds Admin - Recover Password</title>
  
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
							<h2 class="text-dark mb-3">Forgot Password ?</h2>
							<div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <x-jet-validation-errors class="mb-4" />							
						</div>
						<div class="p-40 rounded20 box-shadowed b-2 b-dashed">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
								<div class="form-group">
								<label for="email" class="form-label fs-6 fw-bolder text-dark">Email</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
                                            <label for="email" value="{{ __('Email') }}" ></label>
											<span class="input-group-text bg-transparent text-dark"><i class="ti-email"></i></span>
										</div>
										<input id="email" type="email" class="form-control pl-15 bg-transparent text-dark plc-dark" placeholder="Your Email" name="email" :value="old('email')" required autofocus />
									</div>
								</div>
								  <div class="row">
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-primary btn-rounded margin-top-10">{{ __('Email Password Reset Link') }}</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>	
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
