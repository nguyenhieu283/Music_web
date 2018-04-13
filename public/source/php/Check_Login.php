<?php
use Illuminate\Support\Facades\DB;

if(isset($_POST)){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	// $query = "select * from Accounts where User = '$user' and Pass = '$pass'";
	// $result = mysqli_query($connect, $query);
	// $rows_effect = mysqli_num_rows($result);

	// $row = DB::select("select * from Accounts where User = '$user' and Pass = '$pass'");
	$rows_effect = DB::table('Accounts')->where('User', '=', $user)->where('Pass', '=', $pass)->count();

	if($rows_effect == 1){
		$_SESSION['user'] = $user;
		$_SESSION['failed'] = null;
	}
	else{

		echo "Login failed. User or password is not correct";
		//header("location: ../html/Login.html"); 
		
	}
}


?>