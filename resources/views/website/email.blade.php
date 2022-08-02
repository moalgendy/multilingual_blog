@extends('website.layout.layout')

@section('body')
<div class="container">

    
    <!-- Comment Form Start -->
    <div class="bg-light mb-3" style="padding: 30px;">
        <h3 class="mb-5">Add You Comment</h3>
        <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
            @csrf
                @if(session()->has('message'))
                    <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

<div class="wrap-input100 validate-input form-group" data-validate = "Name is required">
    <label for="name">Name *</label>

<input class="form-control" id="name" type="text" name="name" placeholder="Name">
<span class="focus-input100"></span>
<span class="symbol-input100">
{{-- <i class="fa fa-user" aria-hidden="true"></i> --}}
                </span>
                @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
{{-- 
<div class="wrap-input100 validate-input form-group" data-validate = "Valid email is required: ex@abc.xyz">
    <label for="email">Email *</label>

<input class="form-control" id="email" type="text" name="email" placeholder="Email">
<span class="focus-input100"></span>
<span class="symbol-input100"> --}}
{{-- <i class="fa fa-envelope" aria-hidden="true"></i> --}}
{{-- </span>
                </div> --}}
                <div class="form-group" data-validate = "Subject is required">
                <label for="subject">Subject *</label>

<input class="form-control" id="subject" type="text" name="subject" placeholder="subject">
<span class="focus-input100"></span>
<span class="symbol-input100">
{{-- <i class="fa fa-envelope" aria-hidden="true"></i> --}}
                    </span>
                    @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>


<div class="form-group" data-validate = "Message is required">
    <label for="message">Message *</label>

<textarea class="form-control" name="content" placeholder="Message"></textarea>
            <span class="focus-input100"></span>
            @error('content')
               <span class="text-danger"> {{ $message }} </span>
             @enderror
            </div>

<div class="form-group mb-0">
    <button type="submit" value="Leave a comment"
    class="btn btn-primary font-weight-semi-bold py-2 px-3">Send</button>
</div>
</form>
    </div> 
    </div>

    
    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


@endsection


























{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contact/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contact/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contact/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contact/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('contact/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('contact/css/main.css') }}">
	<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact100" style="background-image: url('{{ asset('contact/images/bg-01.jpg') }}');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="{{ asset('contact/images/img-01.png') }}" alt="IMG">
				</div>

				<form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
                                        @csrf
					<span class="contact100-form-title">
						Contact Form
                                            </span>
                                            @if(session()->has('message'))
                                                <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                        @endif

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
                                            </span>
                                            @error('name')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                                            </div>
                                            <div class="wrap-input100 validate-input" data-validate = "Subject is required">
		        			<input class="input100" type="text" name="subject" placeholder="subject">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
                                                </span>
                                                @error('subject')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
    

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="content" placeholder="Message"></textarea>
                                        <span class="focus-input100"></span>
                                        @error('content')
                                           <span class="text-danger"> {{ $message }} </span>
                                         @enderror
                                        </div>
                
					<div class="container-contact100-form-btn">
						<button type="submit" class="contact100-form-btn">
							Send
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="{{ asset('contact/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('contact/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('contact/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('contact/vendor/select2/select2.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('contact/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('contact/js/main.js') }}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html> --}}
