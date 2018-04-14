<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="css/style_login.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.forgot-pass').click(function(event) {
				$(".pr-wrap").toggleClass("show-pass-reset"); // turn on class with name in file css
			}); 

			$('.pass-reset-submit').click(function(event) {
				$(".pr-wrap").removeClass("show-pass-reset");
			}); 
		});
	</script>
</head>
<body>
	<script type="text/javascript">
		$("#sign-in").click(function(){
			var data = $.get( "{{ route('Check_Login') }}");
			data.done(function(response){
				$("#confirm").html(response);
			});
			data.fail(function(response){
				alert("error");
			});
		});
	</script>

	<div class="wrap">
		<p class="form-title">
		Sign In</p>
		<form class="login" method="POST" action="{{ route('Check_Login') }}">
			@csrf
			<div>
				<input type="text" name ="user" id= "user" placeholder="Username" />
				<input type="password" name="pass" id= "pass" placeholder="Password" />
				<input type="submit" name = "sign_in" id="sign-in" value="Sign In"/>
				<input type="submit" name = "sign_up" id="sign-up" value="Sign Up">
			</div>		
			<div class="remember-forgot">
				<div class="row">
					<div class="col-md-6">
						<div class="checkbox">
							<label>
								<input type="checkbox" />
								Remember Me
							</label>
						</div>
						<div class="forgot-pass-content">
							<a style="cursor: pointer;" class="forgot-pass">Forgot Password</a>
						</div>
						<div id="confirm">

						</div>
					</div>
				</div>
			</div>
			<div class="pr-wrap">
				<div class="pass-reset">
					<label>
						Enter the email you signed up with
					</label>
					<input type="email" placeholder="Email"/>
					<input type="submit" value="Check"/>
				</div>
			</div>
		</form>
	</div>
</body>
</html>