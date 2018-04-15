<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/style_signup.css">
	<script src="js/jquery.js"></script>
	<script  src="js/signup.js"></script>
</head>

<body>
	<form action="{{ route('registerUser') }}" method="post">
		@csrf
		<h2>Sign Up</h2>
		<p>
			<label for="UserName" class="floatLabel">UserName</label>
			<input id="UserName" name="UserName" required type="text">
		</p>
		<p>
			<label for="Name" class="floatLabel">Name</label>
			<input id="Name" name="Name" required type="text">
		</p>
		<p>
			<label for="Date" class="floatLabel">Date</label>
			<input type="text" id="Date" name="Date" placeholder="YYYY-MM-DD" required 
			pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" 
			title="Enter a date in this format YYYY-MM-DD"/>
		</p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="Email" required type="email">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" required type="password">
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" required name="confirm_password" type="password">
			<span>Your passwords do not match</span>
		</p>
		<p>
			<input type="submit" name= "submit" value="Create My Account" id="submit">
		</p>
		@if(session('status') ==  'SignUp failed'){
		<div>
			{{ session('status') }}
		</div>
		@endif
	</form>

</body>

</html>
