

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn Portal</title>

	<link rel="stylesheet" href="{{asset('author/css/style.css')}}">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body class="student-portal">

	<section class="login-block">
			<div class="container">
				<h2 class="text-center heading">Admin Portal</h2>
				<div class="row">
						<div class= "col-md-4 login-sec">
					<h2 class="text-center">Login Now</h2>
                     <p class="text-center" style="color:red; font-size:20px;">
                     	<?php
                         use Illuminate\Support\Facades\Session;

						 $msg =  Session::get('msg');

						 if(isset($msg)){
						 	echo $msg;
						 	Session::put('msg','');
						 }

						 ?>
                     </p>

                     <p class="text-center" style="color:red; font-size:20px;">
                     	<?php
                        

						 $log =  Session::get('log');

						 if(isset($log)){
						 	echo $log;
						 	Session::put('log','');
						 }
						 
						 ?>
                     </p>



					<form class="" action="{{URL::to('/admin_dashboard')}}" method="POST">
						 @csrf
					
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="UserEmail" >
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" >
							
							
						</div>


						<div class="form-check">
						<div class="row">
							<div class="submit"><button name="submit" type="submit" class="btn btn-login float-right">Submit</button></div>
							<div><p style="color: #f7f7f7; font-weight: 400; margin:10px 20px;">Forgot Password? <span><a href="{{URL::to('/password/reset')}}">Click Here</a></span></p></div>
							
							
						</div>
     
                         </div>	
				

					</form>
				</div>	
				</div>
			</div>


			
		</section>


		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="{{asset('author/assets/js/bootbox.min.js')}}"></script>

	</body>
	</html>